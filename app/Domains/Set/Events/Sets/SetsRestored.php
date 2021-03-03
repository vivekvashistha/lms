<?php

namespace App\Domains\Set\Events\Sets;

use App\Domains\Set\Models\Sets;
use Illuminate\Queue\SerializesModels;

/**
 * Class UserRestored.
 */
class SetsRestored
{
    use SerializesModels;

    /**
     * @var
     */
    public $sets;

    /**
     * @param $sets
     */
    public function __construct(Sets $sets)
    {
        $this->sets = $sets;
    }
}
