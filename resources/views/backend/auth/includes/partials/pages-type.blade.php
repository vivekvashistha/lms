@forelse($pages->where('type', $type) as $page)
    <div class="mb-2">
        <div class="form-check">
            <input
                name="pages[]"
                id="page_{{ $page->id }}"
                value="{{ $page->id }}"
                class="form-check-input"
                type="checkbox"
                {{ (old('pages') && in_array($page->id, old('pages'), true)) || (isset($user) && in_array($page->id, $user->pages->modelKeys(), true)) ? 'checked' : '' }} />

            <label class="form-check-label" for="page_{{ $page->id }}">
                {{ $page->name }}
            </label>
        </div><!--form-check-->
    </div>

    @if ($page->isAdmin())
        <blockquote class="ml-3">
            <i class="fa fa-check-circle"></i> @lang('All Permissions')
        </blockquote>
    @else
        @if ($page->permissions->count())
            <blockquote class="ml-3">
                @foreach ($page->permissions as $permission)
                    <i class="fa fa-check-circle"></i> {{ $permission->description }}<br/>
                @endforeach
            </blockquote>
        @else
            <blockquote class="ml-3">
                <i class="fa fa-minus-circle"></i> @lang('No Permissions')
            </blockquote>
        @endif
    @endif
@empty
    <p class="mb-0"><em>@lang('There are no pages to choose from for this type.')</em></p>
@endforelse
