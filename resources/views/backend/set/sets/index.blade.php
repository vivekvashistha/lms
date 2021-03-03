@extends('backend.layouts.app')

@section('title', __('Business Management'))

@section('breadcrumb-links')
    @include('backend.set.sets.includes.breadcrumb-links')
@endsection

@section('content')
    <x-backend.card>
        <x-slot name="header">
            @lang('Business Management')
        </x-slot>

        @if ($logged_in_user->hasAllAccess())
            <x-slot name="headerActions">
                <x-utils.link
                    icon="c-icon cil-plus"
                    class="card-header-action"
                    :href="route('admin.set.sets.create')"
                    :text="__('Create Commision')"
                />
            </x-slot>
        @endif

        <x-slot name="body">
            <livewire:backend.sets-table />
        </x-slot>
    </x-backend.card>
@endsection
