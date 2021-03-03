@extends('backend.layouts.app')

@section('title', __('View Pages'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Pages')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.page.pages.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('Page Title')</th>
                    <td>{{ $pages->title }}</td>
                </tr>

                <tr>
                    <th>@lang('Meta Title')</th>
                    <td>{{ $pages->meta_title }}</td>
                </tr>
                
                <tr>
                    <th>@lang('Meta Description')</th>
                    <td>{{ $pages->meta_description }}</td>
                </tr>
                
                <tr>
                    <th>@lang('Meta Tag')</th>
                    <td>{{ $pages->meta_tag }}</td>
                </tr>
                
                <tr>
                    <th>@lang('Contant')</th>
                    <td>{{ $pages->contant }}</td>
                </tr>

                <tr>
                    <th>@lang('Status')</th>
                    <td>@include('backend.page.pages.includes.status', ['pages' => $pages])</td>
                </tr>

            </table>
        </x-slot>
    </x-backend.card>
@endsection
