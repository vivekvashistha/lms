<?php

namespace App\Domains\Page\Events\Pages;

use App\Domains\Page\Models\Pages;
use Illuminate\Queue\SerializesModels;

/**
 * Class PagesUpdated.
 */
class PagesUpdated
{
    use SerializesModels;

    /**
     * @var
     */
    public $pages;

    /**
     * @param $user
     */
    public function __construct(Pages $pages)
    {
        $this->pages = $pages;
    }
}
