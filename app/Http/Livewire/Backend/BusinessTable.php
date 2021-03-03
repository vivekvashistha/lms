<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Set\Models\Sets;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class BusinessTable.
 */
class BusinessTable extends TableComponent
{
use HtmlComponents;

/**
 * @var string
 */
public $sortField = 'business_commision';

/**
 * @var string
 */
public $status;

/**
 * @var array
 */
protected $options = [
'bootstrap.container' => false,
 'bootstrap.classes.table' => 'table table-striped',
];

/**
 * @param  string  $status
 */
public function mount($status = 'active'): void
{
$this->status = $status;
}

/**
 * @return Builder
 */
public function query(): Builder
{
return Sets::query();
//return $query;
}

/**
 * @return array
 */
public function columns(): array
{
return [
Column::make(__('Business Commision'), 'business_commision')
->searchable()
->sortable()
->format(function (Sets $model) {
return $model->business_commision;
}),
 Column::make(__('Actions'))
->format(function (Sets $model) {
return view('backend.set.sets.includes.actions', ['sets' => $model]);
}),
];
}
}
