<?php

namespace App\Domains\Page\Events\Pages;

use App\Domains\Page\Models\Pages;
use Illuminate\Queue\SerializesModels;

/**
 * Class PagesCreated.
 */
class PagesCreated
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
