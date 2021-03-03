@if ($logged_in_user->hasAllAccess())
        <x-utils.view-button :href="route('admin.page.pages.show', $pages)" />
        <x-utils.edit-button :href="route('admin.page.pages.edit', $pages)" />
        <x-utils.delete-button />
    @endif