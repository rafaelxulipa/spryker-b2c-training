<?php

namespace Pyz\Yves\AntelopePage\Client;

use Pyz\Client\Antelope\AntelopeClientInterface as ZedAntelopeClientInterface;

class AntelopeClient implements AntelopeClientInterface
{
    /**
     * @var \Pyz\Client\Antelope\AntelopeClientInterface
     */
    protected $zedAntelopeClient;

    public function __construct(ZedAntelopeClientInterface $zedAntelopeClient)
    {
        $this->zedAntelopeClient = $zedAntelopeClient;
    }

    /**
     * @return array
     */
    public function getAntelopeList(): array
    {
        return $this->zedAntelopeClient->getAntelopeList();
    }
}
