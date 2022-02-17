<?php

use \Illuminate\Support\Str;

return [
    'production' => false,
    'title' => 'Luthfi Tri Atmaja',
    'description' => 'Just an ordinary software developer who always trying to improve. I write blog posts in free time, coding at day and have a good sleep at night!',
    'getSiteNavLinkClass' => function ($page, $path) {
        return Str::startsWith($page->getPath(), $path) ? 'site-nav-link is-active' : 'site-nav-link';
    },
];
