<div class="form-group row">
    <label for="pages" class="col-md-2 col-form-label">@lang('Pages')</label>

    <div class="col-md-10">
        <div x-show="userType === '{{ $model::TYPE_ADMIN }}'">
            @include('backend.auth.includes.partials.pages-type', ['type' => $model::TYPE_ADMIN])
        </div>

        <div x-show="userType === '{{ $model::TYPE_USER }}'">
            @include('backend.auth.includes.partials.pages-type', ['type' => $model::TYPE_USER])
        </div>
    </div>
</div><!--form-group-->
