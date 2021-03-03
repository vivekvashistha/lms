<?php

namespace App\Domains\Page\Models;

use App\Domains\Page\Models\Traits\Relationship\PermissionRelationship;
use App\Domains\Page\Models\Traits\Scope\PermissionScope;
use Spatie\Permission\Models\Permission as SpatiePermission;

/**
 * Class Permission.
 */
class Permission extends SpatiePermission
{
    use PermissionRelationship,
        PermissionScope;
}
