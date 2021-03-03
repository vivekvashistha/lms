<?php

use App\Domains\Page\Http\Controllers\Backend\Pages\PagesController;
use App\Domains\Page\Http\Controllers\Backend\Pages\DeletedPagesController;
use App\Domains\Page\Models\Pages;
use Tabuna\Breadcrumbs\Trail;

// All route names are prefixed with 'admin.page'.
Route::group([
    'prefix' => 'page',
    'as' => 'page.',
], function () {
    Route::group([
        'prefix' => 'pages',
        'as' => 'pages.',
    ], function () {
        Route::group([
            'middleware' => 'role:'.config('boilerplate.access.role.admin'),
        ], function () {
            Route::get('deleted', [DeletedPagesController::class, 'index'])
                ->name('deleted')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.page.pages.index')
                        ->push(__('Deleted Pages'), route('admin.page.pages.deleted'));
                });

            Route::get('create', [PagesController::class, 'create'])
                ->name('create')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.page.pages.index')
                        ->push(__('Create Pages'), route('admin.page.pages.create'));
                });

            Route::post('/', [PagesController::class, 'store'])->name('store');

            Route::group(['prefix' => '{pages}'], function () {
                Route::get('edit', [PagesController::class, 'edit'])
                    ->name('edit')
                    ->breadcrumbs(function (Trail $trail, Pages $pages) {
                        $trail->parent('admin.page.pages.show', $pages)
                            ->push(__('Edit'), route('admin.page.pages.edit', $pages));
                    });

                Route::patch('/', [PagesController::class, 'update'])->name('update');
                Route::delete('/', [PagesController::class, 'destroy'])->name('destroy');
            });

            Route::group(['prefix' => '{deletedPages}'], function () {
                Route::patch('restore', [DeletedPagesController::class, 'update'])->name('restore');
                Route::delete('permanently-delete', [DeletedPagesController::class, 'destroy'])->name('permanently-delete');
            });
        });

        Route::group([
            'middleware' => 'permission:admin.access.pages.list|admin.access.pages.deactivate|admin.access.pages.reactivate|admin.access.pages.clear-session|admin.access.pages.impersonate|admin.access.pages.change-password',
        ], function () {
            Route::get('deactivated', [DeactivatedPagesController::class, 'index'])
                ->name('deactivated')
                ->middleware('permission:admin.access.pages.reactivate')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.page.pages.index')
                        ->push(__('Deactivated Pages'), route('admin.page.pages.deactivated'));
                });

            Route::get('/', [PagesController::class, 'index'])
                ->name('index')
                ->middleware('permission:admin.access.pages.list|admin.access.pages.deactivate|admin.access.pages.clear-session|admin.access.pages.impersonate|admin.access.pages.change-password')
                ->breadcrumbs(function (Trail $trail) {
                    $trail->parent('admin.dashboard')
                        ->push(__('Pages Management'), route('admin.page.pages.index'));
                });

            Route::group(['prefix' => '{pages}'], function () {
                Route::get('/', [PagesController::class, 'show'])
                    ->name('show')
                    ->middleware('permission:admin.access.pages.list')
                    ->breadcrumbs(function (Trail $trail, Pages $pages) {
                        $trail->parent('admin.page.pages.index')
                            ->push($pages->name, route('admin.page.pages.show', $pages));
                    });

                Route::patch('mark/{status}', [DeactivatedPagesController::class, 'update'])
                    ->name('mark')
                    ->where(['status' => '[0,1]'])
                    ->middleware('permission:admin.access.pages.deactivate|admin.access.pages.reactivate');

                Route::post('clear-session', [PagesSessionController::class, 'update'])
                    ->name('clear-session')
                    ->middleware('permission:admin.access.pages.clear-session');

                Route::get('password/change', [PagesPasswordController::class, 'edit'])
                    ->name('change-password')
                    ->middleware('permission:admin.access.pages.change-password')
                    ->breadcrumbs(function (Trail $trail, Pages $pages) {
                        $trail->parent('admin.page.pages.show', $pages)
                            ->push(__('Change Password'), route('admin.page.pages.change-password', $pages));
                    });

                Route::patch('password/change', [PagesPasswordController::class, 'update'])
                    ->name('change-password.update')
                    ->middleware('permission:admin.access.pages.change-password');
            });
        });
    });
});

