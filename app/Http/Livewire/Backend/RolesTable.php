<?php

namespace App\Http\Livewire\Backend;

// use App\Domains\Auth\Models\Role;
// use App\Domains\Auth\Models\User;
// use Illuminate\Database\Eloquent\Builder;
// use Rappasoft\LaravelLivewireTables\TableComponent;
// use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
// use Rappasoft\LaravelLivewireTables\Views\Column;

// /**
//  * Class RolesTable.
//  */
// class RolesTable extends TableComponent
// {
//     use HtmlComponents;

//     /**
//      * @var string
//      */
//     public $sortField = 'name';

//     /**
//      * @var array
//      */
//     protected $options = [
//         'bootstrap.container' => false,
//         'bootstrap.classes.table' => 'table table-striped',
//     ];

//     /**
//      * @return Builder
//      */
//     public function query(): Builder
//     {
//         return Role::with('permissions:id,name,description')
//             ->withCount('users');
//     }

//     /**
//      * @return array
//      */
//     public function columns(): array
//     {
//         return [
//             Column::make(__('Type'), 'type')
//                 ->sortable()
//                 ->format(function (Role $model) {
//                     if ($model->type === User::TYPE_ADMIN) {
//                         return __('Administrator');
//                     }

//                     if ($model->type === User::TYPE_USER) {
//                         return __('User');
//                     }

//                     return 'N/A';
//                 }),
//             Column::make(__('Name'), 'name')
//                 ->searchable()
//                 ->sortable(),
//             Column::make(__('Permissions'), 'permissions_label')
//                 ->searchable(function ($builder, $term) {
//                     return $builder->orWhereHas('permissions', function ($query) use ($term) {
//                         return $query->where('name', 'like', '%'.$term.'%');
//                     });
//                 })
//                 ->format(function (Role $model) {
//                     return $this->html($model->permissions_label);
//                 }),
//             Column::make(__('Number of Users'), 'users_count')
//                 ->sortable(),
//             Column::make(__('Actions'))
//                 ->format(function (Role $model) {
//                     return view('backend.auth.role.includes.actions', ['model' => $model]);
//                 }),
//         ];
//     }
// }




use App\Domains\Auth\Models\User;
use App\Domains\Auth\Models\Role;
use Illuminate\Support\Facades\DB;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\TimeColumn;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class RolesTable extends LivewireDatatable
{
    public $hideable = 'select';
    public $exportable = true;
    //public $afterTableSlot = 'components.selected';

    public function builder()
    {
        return Role::query();
    }

    public function columns()
    {
        return [
            Column::checkbox(),

            NumberColumn::name('id')
                ->label('ID')
                ->filterable(),

            Column::name('name')
                ->label('Name')
                ->filterable(),
        ];
    }

    
}
