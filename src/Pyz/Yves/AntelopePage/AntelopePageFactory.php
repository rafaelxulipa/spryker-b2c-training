<?php

namespace Pyz\Yves\AntelopePage;

use Pyz\Yves\AntelopePage\Client\AntelopeClientInterface;
use Spryker\Yves\Kernel\Factory\AbstractFactory;

class AntelopePageFactory extends AbstractFactory
{
    /**
     * @return \Pyz\Yves\AntelopePage\Client\AntelopeClientInterface
     */
    public function getAntelopeClient(): AntelopeClientInterface
    {
        return $this->getProvidedDependency(AntelopePageDependencyProvider::CLIENT_ANTELOPE);
    }
}
