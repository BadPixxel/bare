<?php

/*
 * This file is part of the Doctrine Bundle
 *
 * The code was originally distributed inside the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 * (c) Doctrine Project, Benjamin Eberlei <kontakt@beberlei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Dolibarr\Core\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

use Symfony\Component\Routing\RouteCollectionBuilder;

/**
 * Bundle.
 *
 * @author Bernard Paquier <pro@bernard-paquier.fr>
 */
class DolibarrCoreBundle extends Bundle
{
    /**
     * @abstract    Dynamicaly Load Bundle Routes to Root Url
     * @param       RouteCollectionBuilder  $routes
     * @return      void
     */
    public static function configureRoutes(RouteCollectionBuilder $routes)
    {
        $routes->import( __DIR__ . '/Resources/config/routing.yml');
    }
}
