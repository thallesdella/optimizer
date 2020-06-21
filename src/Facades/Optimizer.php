<?php

namespace ThallesDella\Optimizer\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * optimizer | Class Optimizer [ FACADE ]
 *
 * @package  ThallesDella\Optimizer\Facades
 * @author   Thalles D. koester <thallesdella@gmail.com>
 *
 * @method \ThallesDella\Optimizer\Optimizer optimize(string $title, string $description, string $url, string $image,
 *         bool $follow = true)
 * @method \ThallesDella\Optimizer\Optimizer publisher(string $fbPage, string $fbAuthor = null)
 * @method \ThallesDella\Optimizer\Optimizer openGraph(string $siteName, string $locale = "pt_BR", string $schema =
 *         "article")
 * @method \ThallesDella\Optimizer\Optimizer twitterCard(string $creator, string $site, string $domain, string $card =
 *         null)
 * @method \ThallesDella\Optimizer\Optimizer facebook(string $appId = null, array $admins = null)
 *
 * @see      \ThallesDella\Optimizer\Optimizer
 */
class Optimizer extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Optimizer';
    }
}