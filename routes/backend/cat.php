<?php

use App\Domains\Cat\Http\Controllers\Backend\Cats\CatsController;
use App\Domains\Cat\Models\Cats;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.page'.
Route::group([
    'prefix' => 'cat',
    'as' => 'cat.',
], function () {
    Route::group([
        'prefix' => 'cats',
        'as' => 'cats.',
    ], function () {
        Route::group([
            'middleware' => 'role:'.config('boilerplate.access.role.admin'),
        ], function () {
            Route::get('deleted', [DeletedCatsController::class, 'index'])
                ->name('deleted')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.cat.cats.index')
                        ->push(__('Deleted Business'), route('admin.cat.cats.deleted'));
                });

            Route::get('create', [CatsController::class, 'create'])
                ->name('create')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.cat.cats.index')
                        ->push(__('Create Business'), route('admin.cat.cats.create'));
                });

            Route::post('/', [CatsController::class, 'store'])->name('store');

            Route::group(['prefix' => '{cats}'], function () {
                Route::get('edit', [CatsController::class, 'edit'])
                    ->name('edit')
                    ->breadcrumbs(function (Trail $trail, Cats $cats) {
                        $trail->parent('admin.cat.cats.show', $cats)
                            ->push(__('Edit'), route('admin.cat.cats.edit', $cats));
                    });

                Route::patch('/', [CatsController::class, 'update'])->name('update');
                Route::delete('/', [CatsController::class, 'destroy'])->name('destroy');
            });

            Route::group(['prefix' => '{deletedCats}'], function () {
                Route::patch('restore', [DeletedCatsController::class, 'update'])->name('restore');
                Route::delete('permanently-delete', [DeletedCatsController::class, 'destroy'])->name('permanently-delete');
            });
        });

        Route::group([
            'middleware' => 'permission:admin.access.cats.list|admin.access.cats.deactivate|admin.access.cats.reactivate|admin.access.cats.clear-session|admin.access.cats.impersonate|admin.access.cats.change-password',
        ], function () {
            Route::get('deactivated', [DeactivatedCatsController::class, 'index'])
                ->name('deactivated')
                ->middleware('permission:admin.access.cats.reactivate')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.cat.cats.index')
                        ->push(__('Deactivated Business'), route('admin.cat.cats.deactivated'));
                });

            Route::get('/', [CatsController::class, 'index'])
                ->name('index')
                ->middleware('permission:admin.access.cats.list|admin.access.cats.deactivate|admin.access.cats.clear-session|admin.access.cats.impersonate|admin.access.cats.change-password')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.dashboard')
                        ->push(__('Business Management'), route('admin.cat.cats.index'));
                });

            Route::group(['prefix' => '{cats}'], function () {
                Route::get('/', [CatsController::class, 'show'])
                    ->name('show')
                    ->middleware('permission:admin.access.cats.list')
                    ->breadcrumbs(function (Trail $trail, Cats $cats) {
                        $trail->parent('admin.cat.cats.index')
                            ->push($cats->name, route('admin.cat.cats.show', $cats));
                    });

                Route::patch('mark/{status}', [DeactivatedCatsController::class, 'update'])
                    ->name('mark')
                    ->where(['status' => '[0,1]']);
                    //->middleware('permission:admin.access.cats.deactivate|admin.access.cats.reactivate');
            });
        });
    });
});

