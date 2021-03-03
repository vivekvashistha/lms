<?php

namespace App\Domains\Set\Events\Sets;

use App\Domains\Set\Models\Sets;
use Illuminate\Queue\SerializesModels;

/**
 * Class SetsUpdated.
 */
class SetsUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $sets;

    /**
     * @param $user
     */
    public function __construct(Sets $sets)
    {
        $this->sets = $sets;
    }
}
