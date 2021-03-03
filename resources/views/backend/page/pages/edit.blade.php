@inject('model', '\App\Domains\Page\Models\Pages')

@extends('backend.layouts.app')

@section('title', __('Update Pages'))

@section('content')
    <x-forms.patch :action="route('admin.page.pages.update', $pages)">
        <x-backend.card>
            <x-slot name="header">
                @lang('Update Pages')
            </x-slot>

            <x-slot name="headerActions">
                <x-utils.link class="card-header-action" :href="route('admin.page.pages.index')" :text="__('Cancel')" />
            </x-slot>

            <x-slot name="body">
                <div x-data="{pagesType : '{{ $pages->type }}'}">
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">@lang('Title')</label>

                        <div class="col-md-10">
                            <input type="text" name="title" class="form-control" placeholder="{{ __('Title') }}" value="{{ old('title') ?? $pages->title }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                </div>
                
                <div x-data="{pagesType : '{{ $pages->meta_title }}'}">
                    <div class="form-group row">
                        <label for="meta_title" class="col-md-2 col-form-label">@lang('Meta Title')</label>

                        <div class="col-md-10">
                            <input type="text" name="meta_title" class="form-control" placeholder="{{ __('Meta Title') }}" value="{{ old('meta_title') ?? $pages->meta_title }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                </div>
                
                <div x-data="{pagesType : '{{ $pages->meta_description }}'}">
                    <div class="form-group row">
                        <label for="timeta_descriptiontle" class="col-md-2 col-form-label">@lang('Meta Description')</label>

                        <div class="col-md-10">
                            <input type="text" name="meta_description" class="form-control" placeholder="{{ __('Meta Description') }}" value="{{ old('meta_description') ?? $pages->meta_description }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                </div>
                
                
                <div x-data="{pagesType : '{{ $pages->meta_tag }}'}">
                    <div class="form-group row">
                        <label for="meta_tag" class="col-md-2 col-form-label">@lang('Meta Tag')</label>

                        <div class="col-md-10">
                            <input type="text" name="meta_tag" class="form-control" placeholder="{{ __('Meta Tag') }}" value="{{ old('meta_tag') ?? $pages->meta_tag }}" maxlength="100" required />
                        </div>
                    </div><!--form-group-->
                </div>
                
                <div x-data="{pagesType : '{{ $pages->contant }}'}">
                    <div class="form-group row">
                        <label for="contant" class="col-md-2 col-form-label">@lang('Contant')</label>

                        <div class="col-md-10">
                            <textarea id="contant" name="contant" rows="4" cols="100">{{ old('contant') ?? $pages->contant }}</textarea>
                        </div>
                    </div><!--form-group-->
                </div>
            </x-slot>

            <x-slot name="footer">
                <button class="btn btn-sm btn-primary float-right" type="submit">@lang('Update Pages')</button>
            </x-slot>
        </x-backend.card>
    </x-forms.patch>
@endsection
