@forelse($sets->where('type', $type) as $sets)
    <div class="mb-2">
        <div class="form-check">
            <input
                name="sets[]"
                id="set_{{ $sets->id }}"
                value="{{ $sets->id }}"
                class="form-check-input"
                type="checkbox"
                {{ (old('sets') && in_array($sets->id, old('sets'), true)) || (isset($user) && in_array($sets->id, $user->sets->modelKeys(), true)) ? 'checked' : '' }} />

            <label class="form-check-label" for="set_{{ $sets->id }}">
                {{ $sets->name }}
            </label>
        </div><!--form-check-->
    </div>

    @if ($sets->isAdmin())
        <blockquote class="ml-3">
            <i class="fa fa-check-circle"></i> @lang('All Permissions')
        </blockquote>
    @else
        @if ($sets->permissions->count())
            <blockquote class="ml-3">
                @foreach ($sets->permissions as $permission)
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
    <p class="mb-0"><em>@lang('There are no sets to choose from for this type.')</em></p>
@endforelse
