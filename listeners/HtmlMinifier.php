<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;
use Minifier\TinyMinify;

class HtmlMinifier
{
    public function handle(Jigsaw $jigsaw)
    {
        collect($jigsaw->getOutputPaths())
            ->reject(function ($path) {
                return Str::is(['/assets/*'], $path);
            })->each(function ($path) use ($jigsaw) {
                $fixedPath = Str::endsWith($path, '.html') ? $path : $path . '/index.html';
                $minified = TinyMinify::html($jigsaw->readOutputFile($fixedPath));
                $jigsaw->writeOutputFile($fixedPath, $minified);
            });
    }
}
