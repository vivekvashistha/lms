<?php

namespace App\Domains\Set\Services;

use App\Domains\Set\Events\Sets\SetsCreated;
use App\Domains\Set\Events\Sets\SetsDeleted;
//use App\Domains\Set\Events\Sets\SetsDestroyed;
use App\Domains\Set\Events\Sets\SetsRestored;
//use App\Domains\Set\Events\Sets\SetsStatusChanged;
use App\Domains\Set\Events\Sets\SetsUpdated;
use App\Domains\Set\Models\Sets;
//use App\Domains\Set\Models\Role;
use App\Exceptions\GeneralException;
use App\Services\BaseService;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
/**
 * Class SetsService.
 */
class SetsService extends BaseService
{
    /**
     * SetsService constructor.
     *
     * @param  Sets  $sets
     */
    public function __construct(Sets $sets)
    {
        $this->model = $sets;
    }

    /**
     * @param $type
     * @param  bool|int  $perSet
     *
     * @return mixed
     */
    public function getByType($type, $perSet = false)
    {
        if (is_numeric($perSet)) {
            return $this->model::byType($type)->paginate($perSet);
        }

        return $this->model::byType($type)->get();
    }

    /**
     * @param  array  $data
     *
     * @return mixed
     * @throws GeneralException
     */
    public function registerSets(array $data = []): Sets
    {
        DB::beginTransaction();

        try {
            $sets = $this->createSets($data);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem creating your business commision.'));
        }

        DB::commit();

        return $sets;
    }

    /**
     * @param $info
     * @param $provider
     *
     * @return mixed
     * @throws GeneralException
     */
    public function registerProvider($info, $provider): Sets
    {
        $sets = $this->model::where('provider_id', $info->id)->first();

        if (! $sets) {
            DB::beginTransaction();

            try {
                $sets = $this->createSets([
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

        return $sets;
    }

    /**
     * @param  array  $data
     *
     * @return Sets
     * @throws GeneralException
     * @throws \Throwable
     */
    public function store(array $data = []): Sets
    { 
        DB::beginTransaction();

        try { 
            $sets = $this->createSets([
                'business_commision' => $data['business_commision'],
                'status' => isset($data['status']) && $data['status'] === '1',
            ]);
            //$sets->syncRoles($data['roles'] ?? []);

//            if (! config('boilerplate.access.user.only_roles')) {
//                $sets->syncPermissions($data['permissions'] ?? []);
//            }
        } catch (Exception $e) {
            DB::rollBack();
            throw new GeneralException(__('There was a problem creating this business commision. Please try again.'));
        }

        event(new SetsCreated($sets));

        DB::commit();

        // They didn't want to auto verify the email, but do they want to send the confirmation email to do so?
//        if (! isset($data['email_verified']) && isset($data['send_confirmation_email']) && $data['send_confirmation_email'] === '1') {
//            $sets->sendEmailVerificationNotification();
//        }

        return $sets;
    }

    /**
     * @param  Sets  $sets
     * @param  array  $data
     *
     * @return Sets
     * @throws \Throwable
     */
    public function update(Sets $sets, array $data = []): Sets
    {
        DB::beginTransaction();

        try {
            $sets->update([
                'business_commision' => $data['business_commision'],
            ]);
        } catch (Exception $e) {
            DB::rollBack();

            throw new GeneralException(__('There was a problem updating this business commision. Please try again.'));
        }
        event(new SetsUpdated($sets));

        DB::commit();

        return $sets;
    }

    /**
     * @param  Sets  $sets
     * @param  array  $data
     *
     * @return Sets
     */
    public function updateProfile(Sets $sets, array $data = []): Sets
    {
        $sets->name = $data['name'] ?? null;

        if ($sets->canChangeEmail() && $sets->email !== $data['email']) {
            $sets->email = $data['email'];
            $sets->email_verified_at = null;
            $sets->sendEmailVerificationNotification();
            session()->flash('resent', true);
        }

        return tap($sets)->save();
    }

    /**
     * @param  Sets  $sets
     * @param $data
     * @param  bool  $expired
     *
     * @return Sets
     * @throws \Throwable
     */
    public function updatePassword(Sets $sets, $data, $expired = false): Sets
    {
        if (isset($data['current_password'])) {
            throw_if(
                ! Hash::check($data['current_password'], $sets->password),
                new GeneralException(__('That is not your old password.'))
            );
        }

        // Reset the expiration clock
        if ($expired) {
            $sets->password_changed_at = now();
        }

        $sets->password = $data['password'];

        return tap($sets)->update();
    }

    /**
     * @param  Sets  $sets
     * @param $status
     *
     * @return Sets
     * @throws GeneralException
     */
    public function mark(Sets $sets, $status): Sets
    {
        if ($status === 0 && auth()->id() === $sets->id) {
            throw new GeneralException(__('You can not do that to yourself.'));
        }

        if ($status === 0 && $sets->isMasterAdmin()) {
            throw new GeneralException(__('You can not deactivate the administrator account.'));
        }

        $sets->active = $status;

        if ($sets->save()) {
            event(new SetsStatusChanged($sets, $status));

            return $sets;
        }

        throw new GeneralException(__('There was a problem updating this user. Please try again.'));
    }

    /**
     * @param  Sets  $sets
     *
     * @return Sets
     * @throws GeneralException
     */
    public function delete(Sets $sets): Sets
    {
//        if ($sets->id === auth()->id()) {
//            throw new GeneralException(__('You can not delete yourself.'));
//        }

        if ($this->deleteById($sets->id)) {
            event(new SetsDeleted($sets));

            return $sets;
        }

        throw new GeneralException('There was a problem deleting this user. Please try again.');
    }

    /**
     * @param Sets $sets
     *
     * @throws GeneralException
     * @return Sets
     */
    public function restore(Sets $sets): Sets
    {
        if ($sets->restore()) {
            event(new SetsRestored($sets));

            return $sets;
        }

        throw new GeneralException(__('There was a problem restoring this user. Please try again.'));
    }

    /**
     * @param  Sets  $sets
     *
     * @return bool
     * @throws GeneralException
     */
    public function destroy(Sets $sets): bool
    {
        if ($sets->forceDelete()) {
            event(new SetsDestroyed($sets));

            return true;
        }

        throw new GeneralException(__('There was a problem permanently deleting this user. Please try again.'));
    }

    /**
     * @param  array  $data
     *
     * @return Sets
     */
    protected function createSets(array $data = []): Sets
    { 
        return $this->model::create([
            'business_commision' => $data['business_commision'] ?? null,
            'status' => $data['status'] ?? true,
        ]);
    }
    
    /**
     * @param $type
     * @param  bool|int  $perSet
     *
     * @return mixed
     */
    public function getCountByRole()
    {
        $roles = Role::pluck('name');
        $roleNameArr = array();
        foreach ($roles as $roleName) {
            $setsCount = Sets::whereHas('roles', function($query) use($roleName) {
                $query->where('name', $roleName);
            })->count();
            
            $roleNameArr[$roleName] = $setsCount;
        }

        return $roleNameArr;
    }
}
