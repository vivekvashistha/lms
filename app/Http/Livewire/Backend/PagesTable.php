<?php

namespace App\Http\Livewire\Backend;

use App\Domains\Page\Models\Pages;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\TableComponent;
use Rappasoft\LaravelLivewireTables\Traits\HtmlComponents;
use Rappasoft\LaravelLivewireTables\Views\Column;

/**
 * Class PagesTable.
 */
class PagesTable extends TableComponent
{
use HtmlComponents;

/**
 * @var string
 */
public $sortField = 'title';

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
return Pages::query();
//return $query;
}

/**
 * @return array
 */
public function columns(): array
{
return [
Column::make(__('Title'), 'title')
->searchable()
->sortable()
->format(function (Pages $model) {
return $model->title;
}),
 Column::make(__('Meta Title'), 'meta_title')
->searchable()
->sortable(),
 Column::make(__('Actions'))
->format(function (Pages $model) {
return view('backend.page.pages.includes.actions', ['pages' => $model]);
}),
];
}
}
