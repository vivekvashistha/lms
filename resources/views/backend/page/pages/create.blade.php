@inject('model', '\App\Domains\Page\Models\Pages')

@extends('backend.layouts.app')

@section('title', __('Create Page'))

@section('content')
<x-forms.post :action="route('admin.page.pages.store')">
    <x-backend.card>
        <x-slot name="header">
            @lang('Create Page')
        </x-slot>

        <x-slot name="headerActions">
            <x-utils.link class="card-header-action" :href="route('admin.page.pages.index')" :text="__('Cancel')" />
        </x-slot>

        <x-slot name="body">
            <div x-data="">
                <!--form-group-->

                <div class="form-group row">
                    <label for="title" class="col-md-2 col-form-label">@lang('Page Title')</label>

                    <div class="col-md-10">
                        <input type="text" name="title" class="form-control" placeholder="{{ __('Title') }}" value="{{ old('title') }}" maxlength="100" required />
                    </div>
                </div><!--form-group-->

                <div class="form-group row">
                    <label for="meta_title" class="col-md-2 col-form-label">@lang('Meta Title')</label>

                    <div class="col-md-10">
                        <input type="text" name="meta_title" class="form-control" placeholder="{{ __('Meta Title') }}" value="{{ old('meta_title') }}" />
                    </div>
                </div><!--form-group-->

                <div class="form-group row">
                    <label for="meta_description" class="col-md-2 col-form-label">@lang('Meta Description')</label>

                    <div class="col-md-10">
                        <input type="text" name="meta_description" id="meta_description" class="form-control" placeholder="{{ __('Meta Description') }}" />
                    </div>
                </div><!--form-group-->

                <div class="form-group row">
                    <label for="meta_tag" class="col-md-2 col-form-label">@lang('Meta Tag')</label>

                    <div class="col-md-10">
                        <input type="text" name="meta_tag" id="meta_tag" class="form-control" placeholder="{{ __('Meta Tag') }}" />
                    </div>
                </div><!--form-group-->
                
                <div class="form-group row">
                    <label for="contant" class="col-md-2 col-form-label">@lang('Contant')</label>

                    <div class="col-md-10">
                        <textarea id="contant" name="contant" rows="4" cols="100"></textarea>
                    </div>
                </div>
                

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
            <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Create Page')</button>
        </x-slot>
    </x-backend.card>
</x-forms.post>
@endsection
