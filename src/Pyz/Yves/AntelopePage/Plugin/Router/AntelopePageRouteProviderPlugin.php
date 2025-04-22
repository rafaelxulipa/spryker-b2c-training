<?php

namespace Pyz\Yves\AntelopePage\Plugin\Router;

use Spryker\Yves\Kernel\Plugin\AbstractPlugin;
use Spryker\Yves\Router\Plugin\RouterPluginInterface;
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

class AntelopePageRouteProviderPlugin extends AbstractPlugin implements RouterPluginInterface
{
    /**
     * {@inheritDoc}
     */
    public function addRoutes(RouteCollection $routeCollection): void
    {
        $routeCollection->add('antelope_page', new Route(
            '/antelopes',
            [
                '_controller' => 'Pyz\Yves\AntelopePage\Controller\AntelopeController::indexAction',
            ]
        ));
    }
}
