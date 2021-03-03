<?php

namespace App\Domains\Page\Services;

use App\Domains\Page\Events\Pages\PagesCreated;
//use App\Domains\Page\Events\Pages\PagesDeleted;
//use App\Domains\Page\Events\Pages\PagesDestroyed;
//use App\Domains\Page\Events\Pages\PagesRestored;
//use App\Domains\Page\Events\Pages\PagesStatusChanged;
use App\Domains\Page\Events\Pages\PagesUpdated;
use App\Domains\Page\Models\Pages;
//use App\Domains\Page\Models\Role;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

/**
 * Class PagesService.
 */
class PagesService extends BaseService
{
    /**
     * PagesService constructor.
     *
     * @param  Pages  $pages
     */
    public function __construct(Pages $pages)
    {
        $this->model = $pages;
    }

    /**
     * @param $type
     * @param  bool|int  $perPage
     *
     * @return mixed
     */
    public function getByType($type, $perPage = false)
    {
        if (is_numeric($perPage)) {
            return $this->model::byType($type)->paginate($perPage);
        }

        return $this->model::byType($type)->get();
    }

    /**
     * @param  array  $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function registerPages(array $data = []): Pages
    {
        DB::beginTransaction();

        try {
            $pages = $this->createPages($data);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating your account.'));
        }

        DB::commit();

        return $pages;
    }

    /**
     * @param $info
     * @param $provider
     *
     * @return mixed
     * @throws GeneralException
     */
    public function registerProvider($info, $provider): Pages
    {
        $pages = $this->model::where('provider_id', $info->id)->first();

        if (! $pages) {
            DB::beginTransaction();

            try {
                $pages = $this->createPages([
                    'name' => $info->name,
                    'email' => $info->email,
                    'provider' => $provider,
                    'provider_id' => $info->id,
                    'email_verified_at' => now(),
                ]);
            } catch (Exception $e) {
                DB::rollBack();

                throw new GeneralException(__('There was a problem connecting to :provider', ['provider' => $provider]));
            }

            DB::commit();
        }

        return $pages;
    }

    /**
     * @param  array  $data
     *
     * @return Pages
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Pages
    { 
        DB::beginTransaction();

        try { 
            $pages = $this->createPages([
                'title' => $data['title'],
                'meta_title' => $data['meta_title'],
                'meta_description' => $data['meta_description'],
                'meta_tag' => $data['meta_tag'],
                'contant' => $data['contant'],
                'status' => isset($data['status']) && $data['status'] === '1',
            ]);
            //$pages->syncRoles($data['roles'] ?? []);

//            if (! config('boilerplate.access.user.only_roles')) {
//                $pages->syncPermissions($data['permissions'] ?? []);
//            }
        } catch (Exception $e) {
            DB::rollBack();
            throw new GeneralException(__('There was a problem creating this page. Please try again.'));
        }

        event(new PagesCreated($pages));

        DB::commit();

        // They didn't want to auto verify the email, but do they want to send the confirmation email to do so?
//        if (! isset($data['email_verified']) && isset($data['send_confirmation_email']) && $data['send_confirmation_email'] === '1') {
//            $pages->sendEmailVerificationNotification();
//        }

        return $pages;
    }

    /**
     * @param  Pages  $pages
     * @param  array  $data
     *
     * @return Pages
     * @throws \Throwable
     */
    public function update(Pages $pages, array $data = []): Pages
    { 
        DB::beginTransaction();

        try {
            $pages->update([
                'title' => $data['title'],
                'meta_title' => $data['meta_title'],
                'meta_description' => $data['meta_description'],
                'meta_tag' => $data['meta_tag'],
                'contant' => $data['contant'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this pages. Please try again.'));
        }

        event(new PagesUpdated($pages));

        DB::commit();

        return $pages;
    }

    /**
     * @param  Pages  $pages
     * @param  array  $data
     *
     * @return Pages
     */
    public function updateProfile(Pages $pages, array $data = []): Pages
    {
        $pages->name = $data['name'] ?? null;

        if ($pages->canChangeEmail() && $pages->email !== $data['email']) {
            $pages->email = $data['email'];
            $pages->email_verified_at = null;
            $pages->sendEmailVerificationNotification();
            session()->flash('resent', true);
        }

        return tap($pages)->save();
    }

    /**
     * @param  Pages  $pages
     * @param $data
     * @param  bool  $expired
     *
     * @return Pages
     * @throws \Throwable
     */
    public function updatePassword(Pages $pages, $data, $expired = false): Pages
    {
        if (isset($data['current_password'])) {
            throw_if(
                ! Hash::check($data['current_password'], $pages->password),
                new GeneralException(__('That is not your old password.'))
            );
        }

        // Reset the expiration clock
        if ($expired) {
            $pages->password_changed_at = now();
        }

        $pages->password = $data['password'];

        return tap($pages)->update();
    }

    /**
     * @param  Pages  $pages
     * @param $status
     *
     * @return Pages
     * @throws GeneralException
     */
    public function mark(Pages $pages, $status): Pages
    {
        if ($status === 0 && auth()->id() === $pages->id) {
            throw new GeneralException(__('You can not do that to yourself.'));
        }

        if ($status === 0 && $pages->isMasterAdmin()) {
            throw new GeneralException(__('You can not deactivate the administrator account.'));
        }

        $pages->active = $status;

        if ($pages->save()) {
            event(new PagesStatusChanged($pages, $status));

            return $pages;
        }

        throw new GeneralException(__('There was a problem updating this user. Please try again.'));
    }

    /**
     * @param  Pages  $pages
     *
     * @return Pages
     * @throws GeneralException
     */
    public function delete(Pages $pages): Pages
    {
        if ($pages->id === auth()->id()) {
            throw new GeneralException(__('You can not delete yourself.'));
        }

        if ($this->deleteById($pages->id)) {
            event(new PagesDeleted($pages));

            return $pages;
        }

        throw new GeneralException('There was a problem deleting this user. Please try again.');
    }

    /**
     * @param Pages $pages
     *
     * @throws GeneralException
     * @return Pages
     */
    public function restore(Pages $pages): Pages
    {
        if ($pages->restore()) {
            event(new PagesRestored($pages));

            return $pages;
        }

        throw new GeneralException(__('There was a problem restoring this user. Please try again.'));
    }

    /**
     * @param  Pages  $pages
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Pages $pages): bool
    {
        if ($pages->forceDelete()) {
            event(new PagesDestroyed($pages));

            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this user. Please try again.'));
    }

    /**
     * @param  array  $data
     *
     * @return Pages
     */
    protected function createPages(array $data = []): Pages
    { 
        return $this->model::create([
            'title' => $data['title'] ?? null,
            'meta_title' => $data['meta_title'] ?? null,
            'meta_description' => $data['meta_description'] ?? null,
            'meta_tag' => $data['meta_tag'] ?? null,
            'contant' => $data['contant'] ?? null,
            'status' => $data['status'] ?? true,
        ]);
    }
    
    /**
     * @param $type
     * @param  bool|int  $perPage
     *
     * @return mixed
     */
    public function getCountByRole()
    {
        $roles = Role::pluck('name');
        $roleNameArr = array();
        foreach ($roles as $roleName) {
            $pagesCount = Pages::whereHas('roles', function($query) use($roleName) {
                $query->where('name', $roleName);
            })->count();
            
            $roleNameArr[$roleName] = $pagesCount;
        }

        return $roleNameArr;
    }
}
