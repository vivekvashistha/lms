@extends('backend.layouts.app')

@section('title', __('View Business'))

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('View Business')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.set.sets.index')" :text="__('Back')" />
        </x-slot>

        <x-slot name="body">
            <table class="table table-hover">
                <tr>
                    <th>@lang('Business Commision')</th>
                    <td>{{ $sets->business_commision }}</td>
                </tr>

                <tr>
                    <th>@lang('Status')</th>
                    <td>@include('backend.set.sets.includes.status', ['sets' => $sets])</td>
                </tr>

            </table>
        </x-slot>
    </x-backend.card>
@endsection
