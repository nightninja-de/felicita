<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SeoController extends Controller
{
    public function robots(Request $request): Response
    {
        $sitemapUrl = $request->getSchemeAndHttpHost().'/sitemap.xml';

        $content = <<<TXT
        User-agent: *
        Disallow: /staff/
        Disallow: /voucher/success
        Disallow: /voucher/checkout

        Sitemap: {$sitemapUrl}
        TXT;

        return response($content, 200)->header('Content-Type', 'text/plain');
    }

    public function sitemap(Request $request): Response
    {
        $base = $request->getSchemeAndHttpHost();

        $pages = [
            ['loc' => '/', 'changefreq' => 'weekly', 'priority' => '1.0'],
            ['loc' => '/home/menu', 'changefreq' => 'weekly', 'priority' => '0.9'],
            ['loc' => '/home/about', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => '/home/reservations', 'changefreq' => 'monthly', 'priority' => '0.9'],
            ['loc' => '/home/contact', 'changefreq' => 'monthly', 'priority' => '0.7'],
            ['loc' => '/home/chef', 'changefreq' => 'monthly', 'priority' => '0.5'],
            ['loc' => '/voucher', 'changefreq' => 'monthly', 'priority' => '0.6'],
        ];

        $urls = collect($pages)->map(fn ($page) => <<<XML
            <url>
                <loc>{$base}{$page['loc']}</loc>
                <changefreq>{$page['changefreq']}</changefreq>
                <priority>{$page['priority']}</priority>
            </url>
        XML)->implode("\n");

        $content = <<<XML
        <?xml version="1.0" encoding="UTF-8"?>
        <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        {$urls}
        </urlset>
        XML;

        return response($content, 200)->header('Content-Type', 'application/xml');
    }
}
