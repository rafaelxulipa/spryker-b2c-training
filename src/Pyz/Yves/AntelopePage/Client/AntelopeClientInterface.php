<?php

namespace Pyz\Yves\AntelopePage\Client;

interface AntelopeClientInterface
{
    /**
     * @return array
     */
    public function getAntelopeList(): array;
}
