<?php

namespace Pyz\Yves\AntelopePage;

use Spryker\Yves\Kernel\AbstractBundleDependencyProvider;
use Spryker\Yves\Kernel\Container;
use Pyz\Yves\AntelopePage\Plugin\Router\AntelopePageRouteProviderPlugin;

class AntelopePageDependencyProvider extends AbstractBundleDependencyProvider
{
    /**
     * {@inheritDoc}
     */
    public function provideDependency(Container $container): void
    {
        $this->addRouterPlugins($container);
    }

    /**
     * @param \Spryker\Yves\Kernel\Container $container
     */
    protected function addRouterPlugins(Container $container): void
    {
        $container->set(static::ROUTER_PLUGINS, [
            new AntelopePageRouteProviderPlugin(),
        ]);
    }
}
