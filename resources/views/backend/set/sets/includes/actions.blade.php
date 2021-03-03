@if ($logged_in_user->hasAllAccess())
        <x-utils.view-button :href="route('admin.set.sets.show', $sets)" />
        <x-utils.edit-button :href="route('admin.set.sets.edit', $sets)" />
        <x-utils.delete-button />
    @endif