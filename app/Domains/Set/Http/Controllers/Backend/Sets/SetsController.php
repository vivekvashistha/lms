<?php

namespace App\Domains\Set\Http\Controllers\Backend\Sets;

use App\Domains\Set\Http\Requests\Backend\Sets\DeleteSetsRequest;
use App\Domains\Set\Http\Requests\Backend\Sets\EditSetsRequest;
use App\Domains\Set\Http\Requests\Backend\Sets\StoreSetsRequest;
use App\Domains\Set\Http\Requests\Backend\Sets\UpdateSetsRequest;
use App\Domains\Set\Models\Sets;
//use App\Domains\Set\Services\PermissionService;
//use App\Domains\Set\Services\RoleService;
use App\Domains\Set\Services\SetsService;
use App\Http\Controllers\Controller;

/**
 * Class SetsController.
 */
class SetsController extends Controller
{
    /**
     * @var SetsService
     */
    protected $setsService;

    /**
     * SetsController constructor.
     *
     * @param  SetsService  $setsService
     * @param  RoleService  $roleService
     */
    public function __construct(SetsService $setsService)
    {
        $this->setsService = $setsService;
    }

    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.set.sets.index');
    }

    /**
     * @return mixed
     */
    public function create()
    {
        return view('backend.set.sets.create');
    }

    /**
     * @param  StoreSetsRequest  $request
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     * @throws \Throwable
     */
    public function store(StoreSetsRequest $request)
    {
        $sets = $this->setsService->store($request->validated());

        return redirect()->route('admin.set.sets.show', $sets)->withFlashSuccess(__('The Business Commision was successfully created.'));
    }

    /**
     * @param  Sets  $sets
     *
     * @return mixed
     */
    public function show(Sets $sets)
    { 
        return view('backend.set.sets.show')
            ->withSets($sets);
    }

    /**
     * @param  EditSetsRequest  $request
     * @param  Sets  $sets
     *
     * @return mixed
     */
    public function edit(EditSetsRequest $request, Sets $sets)
    {
        return view('backend.set.sets.edit')
            ->withSets($sets)
            ->withUsedPermissions($sets->permissions->modelKeys());
    }

    /**
     * @param  UpdateSetsRequest  $request
     * @param  Sets  $sets
     *
     * @return mixed
     * @throws \Throwable
     */
    public function update(UpdateSetsRequest $request, Sets $sets)
    {
        $this->setsService->update($sets, $request->validated());

        return redirect()->route('admin.set.sets.show', $sets)->withFlashSuccess(__('The business commision was successfully updated.'));
    }

    /**
     * @param  DeleteSetsRequest  $request
     * @param  Sets  $sets
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(DeleteSetsRequest $request, Sets $sets)
    {
        $this->setsService->delete($sets);

        return redirect()->route('admin.set.sets.deleted')->withFlashSuccess(__('The business commision was successfully deleted.'));
    }
}
