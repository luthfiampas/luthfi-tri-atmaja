<?php

namespace App\Listeners;

use Illuminate\Support\Str;
use TightenCo\Jigsaw\Jigsaw;
use samdark\sitemap\Sitemap;

class SitemapGenerator
{
    protected $exclude = ['/assets/*', '*/favicon.ico', '*/404*'];

    public function handle(Jigsaw $jigsaw)
    {
        $baseUrl = $jigsaw->getConfig('baseUrl');

        if (!$baseUrl) {
            echo ("\nTo generate a sitemap.xml file, please specify 'baseUrl' in the config.php.\n\n");
            return;
        }

        $sitemap = new Sitemap($jigsaw->getDestinationPath() . '/sitemap.xml');

        collect($jigsaw->getPages())
            ->reject(function ($page) {
                return $this->isExcluded($this->normalizePath($page));
            })->each(function ($page) use ($baseUrl, $sitemap) {
                $url = rtrim($baseUrl, '/') . $this->normalizePath($page);
                $sitemap->addItem($url, $page->getModifiedTime(), Sitemap::DAILY);
            });

        $sitemap->write();
    }

    private function normalizePath($page)
    {
        return str_replace('\\', '/', $page->getPath());
    }

    private function isExcluded($path)
    {
        return Str::is($this->exclude, $path);
    }
}
