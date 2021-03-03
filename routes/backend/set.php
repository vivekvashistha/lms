<?php

use App\Domains\Set\Http\Controllers\Backend\Sets\SetsController;
use App\Domains\Set\Models\Sets;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.page'.
Route::group([
    'prefix' => 'set',
    'as' => 'set.',
], function () {
    Route::group([
        'prefix' => 'sets',
        'as' => 'sets.',
    ], function () {
        Route::group([
            'middleware' => 'role:'.config('boilerplate.access.role.admin'),
        ], function () {
            Route::get('deleted', [DeletedSetsController::class, 'index'])
                ->name('deleted')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.set.sets.index')
                        ->push(__('Deleted Business'), route('admin.set.sets.deleted'));
                });

            Route::get('create', [SetsController::class, 'create'])
                ->name('create')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.set.sets.index')
                        ->push(__('Create Business'), route('admin.set.sets.create'));
                });

            Route::post('/', [SetsController::class, 'store'])->name('store');

            Route::group(['prefix' => '{sets}'], function () {
                Route::get('edit', [SetsController::class, 'edit'])
                    ->name('edit')
                    ->breadcrumbs(function (Trail $trail, Sets $sets) {
                        $trail->parent('admin.set.sets.show', $sets)
                            ->push(__('Edit'), route('admin.set.sets.edit', $sets));
                    });

                Route::patch('/', [SetsController::class, 'update'])->name('update');
                Route::delete('/', [SetsController::class, 'destroy'])->name('destroy');
            });

            Route::group(['prefix' => '{deletedSets}'], function () {
                Route::patch('restore', [DeletedSetsController::class, 'update'])->name('restore');
                Route::delete('permanently-delete', [DeletedSetsController::class, 'destroy'])->name('permanently-delete');
            });
        });

        Route::group([
            'middleware' => 'permission:admin.access.sets.list|admin.access.sets.deactivate|admin.access.sets.reactivate|admin.access.sets.clear-session|admin.access.sets.impersonate|admin.access.sets.change-password',
        ], function () {
            Route::get('deactivated', [DeactivatedSetsController::class, 'index'])
                ->name('deactivated')
                ->middleware('permission:admin.access.sets.reactivate')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.set.sets.index')
                        ->push(__('Deactivated Business'), route('admin.set.sets.deactivated'));
                });

            Route::get('/', [SetsController::class, 'index'])
                ->name('index')
                ->middleware('permission:admin.access.sets.list|admin.access.sets.deactivate|admin.access.sets.clear-session|admin.access.sets.impersonate|admin.access.sets.change-password')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.dashboard')
                        ->push(__('Business Management'), route('admin.set.sets.index'));
                });

            Route::group(['prefix' => '{sets}'], function () {
                Route::get('/', [SetsController::class, 'show'])
                    ->name('show')
                    ->middleware('permission:admin.access.sets.list')
                    ->breadcrumbs(function (Trail $trail, Sets $sets) {
                        $trail->parent('admin.set.sets.index')
                            ->push($sets->name, route('admin.set.sets.show', $sets));
                    });

                Route::patch('mark/{status}', [DeactivatedSetsController::class, 'update'])
                    ->name('mark')
                    ->where(['status' => '[0,1]']);
                    //->middleware('permission:admin.access.sets.deactivate|admin.access.sets.reactivate');
            });
        });
    });
});

