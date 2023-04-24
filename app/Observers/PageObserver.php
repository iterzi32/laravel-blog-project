<?php

namespace App\Observers;

use App\Models\Page;
use Illuminate\Support\Str;

class PageObserver
{
    public function creating(Page $page): void
    {
        $page->title = Str::title($page->getAttribute('title'));
        $page->slug = Str::slug($page->getAttribute('slug'));
    }


    public function updating(Page $page): void
    {
        $page->title = Str::title($page->getAttribute('title'));
        $page->slug = Str::slug($page->getAttribute('slug'));
    }

}
