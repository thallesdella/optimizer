<?php

namespace ThallesDella\Optimizer\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use ThallesDella\Optimizer\Facades\Optimizer;

/**
 * optimizer | Class SEO [ MIDDLEWARE ]
 *
 * @package  ThallesDella\Optimizer\Http\Middleware
 * @author   Thalles D. koester <thallesdella@gmail.com>
 */
class SEO
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $this->openGraph();
        $this->facebookPublisher();
        $this->facebookApp();
        $this->twitter();
        
        return $next($request);
    }
    
    private function openGraph()
    {
        Optimizer::openGraph(
            Config::get('app.name'),
            Config::get('app.locale')
        );
    }
    
    private function facebookPublisher()
    {
        $pageId = Config::get('seo.facebook.page', false);
        if (!$pageId) {
            return;
        }
        
        Optimizer::publisher(
            $pageId,
            Config::get('seo.facebook.author', null)
        );
    }
    
    private function facebookApp()
    {
        Optimizer::facebook(
            Config::get('seo.facebook.appId', null),
            Config::get('seo.facebook.admins', null)
        );
    }
    
    private function twitter()
    {
        $creator = Config::get('seo.twitter.creator', false);
        $publisher = Config::get('seo.twitter.publisher', false);
        
        if (!$creator || !$publisher) {
            return;
        }
        
        Optimizer::twitterCard(
            $creator,
            $publisher,
            Config::get('app.url'),
            Config::get('seo.twitter.card') ?? 'summary_large_image'
        );
    }
}
