@inject('model', '\App\Domains\Set\Models\Sets')

@extends('backend.layouts.app')

@section('title', __('Create Business'))

@section('content')
<x-forms.post :action="route('admin.set.sets.store')">
    <x-backend.card>
        <x-slot name="header">
            @lang('Create Commision')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.set.sets.index')" :text="__('Cancel')" />
        </x-slot>

        <x-slot name="body">
            <div x-data="">
                <!--form-group-->

                <div class="form-group row">
                    <label for="business_commision" class="col-md-2 col-form-label">@lang('Business Commision')</label>

                    <div class="col-md-10">
                        <input type="text" name="business_commision" class="form-control" placeholder="{{ __('Business Commision') }}" value="{{ old('business_commision') }}" maxlength="100" required />
                    </div>
                </div><!--form-group-->

                <div class="form-group row">
                    <label for="status" class="col-md-2 col-form-label">@lang('Active')</label>

                    <div class="col-md-10">
                        <div class="form-check">
                            <input name="status" id="status" class="form-check-input" type="checkbox" value="1" {{ old('status', true) ? 'checked' : '' }} />
                        </div><!--form-check-->
                    </div>
                </div><!--form-group-->

            </div>
        </x-slot>

        <x-slot name="footer">
            <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Commision')</button>
        </x-slot>
    </x-backend.card>
</x-forms.post>
@endsection
