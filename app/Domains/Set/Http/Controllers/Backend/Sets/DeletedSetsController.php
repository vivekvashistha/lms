<?php

namespace App\Domains\Set\Http\Controllers\Backend\Sets;

use App\Domains\Set\Models\Sets;
use App\Domains\Set\Services\SetsService;
use App\Http\Controllers\Controller;

/**
 * Class DeletedSetsController.
 */
class DeletedSetsController extends Controller
{
    /**
     * @var SetsService
     */
    protected $setsService;

    /**
     * DeletedSetsController constructor.
     *
     * @param  SetsService  $setsService
     */
    public function __construct(SetsService $setsService)
    {
        $this->setsService = $setsService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('backend.set.sets.deleted');
    }

    /**
     * @param  Sets  $deletedSets
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function update(Sets $deletedSets)
    {
        $this->setsService->restore($deletedSets);

        return redirect()->route('admin.set.sets.index')->withFlashSuccess(__('The Business Commision was successfully restored.'));
    }

    /**
     * @param  Sets  $deletedSets
     *
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function destroy(Sets $deletedSets)
    {
        abort_unless(config('boilerplate.access.sets.permanently_delete'), 404);

        $this->setsService->destroy($deletedSets);

        return redirect()->route('admin.set.sets.deleted')->withFlashSuccess(__('The user was permanently deleted.'));
    }
}
