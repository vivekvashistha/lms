<?php

namespace App\Domains\Page\Http\Controllers\Backend\Pages;

//use App\Domains\Page\Http\Requests\Backend\Pages\DeletePagesRequest;
use App\Domains\Page\Http\Requests\Backend\Pages\EditPagesRequest;
use App\Domains\Page\Http\Requests\Backend\Pages\StorePagesRequest;
use App\Domains\Page\Http\Requests\Backend\Pages\UpdatePagesRequest;
use App\Domains\Page\Models\Pages;
//use App\Domains\Page\Services\PermissionService;
//use App\Domains\Page\Services\RoleService;
use App\Domains\Page\Services\PagesService;
use App\Http\Controllers\Controller;

/**
 * Class PagesController.
 */
class PagesController extends Controller
{
    /**
     * @var PagesService
     */
    protected $pagesService;

    /**
     * PagesController constructor.
     *
     * @param  PagesService  $pagesService
     * @param  RoleService  $roleService
     */
    public function __construct(PagesService $pagesService)
    {
        $this->pagesService = $pagesService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.page.pages.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.page.pages.create');
    }

    /**
     * @param  StorePagesRequest  $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StorePagesRequest $request)
    {
        $pages = $this->pagesService->store($request->validated());

        return redirect()->route('admin.page.pages.show', $pages)->withFlashSuccess(__('The pages was successfully created.'));
    }

    /**
     * @param  Pages  $pages
     *
     * @return mixed
     */
    public function show(Pages $pages)
    { 
        return view('backend.page.pages.show')
            ->withPages($pages);
    }

    /**
     * @param  EditPagesRequest  $request
     * @param  Pages  $pages
     *
     * @return mixed
     */
    public function edit(EditPagesRequest $request, Pages $pages)
    {
        return view('backend.page.pages.edit')
            ->withPages($pages)
            ->withUsedPermissions($pages->permissions->modelKeys());
    }

    /**
     * @param  UpdatePagesRequest  $request
     * @param  Pages  $pages
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdatePagesRequest $request, Pages $pages)
    {
        $this->pagesService->update($pages, $request->validated());

        return redirect()->route('admin.page.pages.show', $pages)->withFlashSuccess(__('The pages was successfully updated.'));
    }

    /**
     * @param  DeletePagesRequest  $request
     * @param  Pages  $pages
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeletePagesRequest $request, Pages $pages)
    {
        $this->pagesService->delete($pages);

        return redirect()->route('admin.page.pages.deleted')->withFlashSuccess(__('The pages was successfully deleted.'));
    }
}
