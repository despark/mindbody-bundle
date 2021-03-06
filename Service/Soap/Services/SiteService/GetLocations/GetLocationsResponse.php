<?php

namespace Despark\MindbodyBundle\Service\Soap\Services\SiteService\GetLocations;

use Despark\MindbodyBundle\Service\Soap\Interfaces\ResponseInterface;
use Despark\MindbodyBundle\Service\Soap\Traits\DefaultResponseTrait;

/**
 * Class GetLocationsResponse.
 */
class GetLocationsResponse implements ResponseInterface
{
    use DefaultResponseTrait;


    /**
     * @return string
     */
    public function resultRootKey(): string
    {
        return 'Locations';
    }

    /**
     * @return string
     */
    public function resultItemKey(): string
    {
        return 'Location';
    }
}