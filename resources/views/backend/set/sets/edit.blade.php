@inject('model', '\App\Domains\Set\Models\Sets')

@extends('backend.layouts.app')

@section('title', __('Update Sets'))

@section('content')
    <x-forms.patch :action="route('admin.set.sets.update', $sets)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Sets')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.set.sets.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div x-data="{setsType : '{{ $sets->type }}'}">
                    <div class="form-group row">
                        <label for="business_commision" class="col-md-2 col-form-label">@lang('Business Commision')</label>

                        <div class="col-md-10">
                            <input type="text" name="business_commision" class="form-control" placeholder="{{ __('Business Commision') }}" value="{{ old('business_commision') ?? $sets->business_commision }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                </div>
                
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Commision')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection
