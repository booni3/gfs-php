<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FoundServices implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\FindAvailableServicesResponse
     */
    private $FindAvailableServicesResult;

    /**
     * @return \Booni3\GFS\Type\FindAvailableServicesResponse
     */
    public function getFindAvailableServicesResult()
    {
        return $this->FindAvailableServicesResult;
    }

    /**
     * @param \Booni3\GFS\Type\FindAvailableServicesResponse $FindAvailableServicesResult
     * @return FoundServices
     */
    public function withFindAvailableServicesResult($FindAvailableServicesResult)
    {
        $new = clone $this;
        $new->FindAvailableServicesResult = $FindAvailableServicesResult;

        return $new;
    }


}

