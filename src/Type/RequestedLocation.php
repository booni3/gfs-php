<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedLocation implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\FindAvailableServicesRequest
     */
    private $FindServicesRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\FindAvailableServicesRequest $FindServicesRequest
     */
    public function __construct($FindServicesRequest)
    {
        $this->FindServicesRequest = $FindServicesRequest;
    }

    /**
     * @return \Booni3\GFS\Type\FindAvailableServicesRequest
     */
    public function getFindServicesRequest()
    {
        return $this->FindServicesRequest;
    }

    /**
     * @param \Booni3\GFS\Type\FindAvailableServicesRequest $FindServicesRequest
     * @return RequestedLocation
     */
    public function withFindServicesRequest($FindServicesRequest)
    {
        $new = clone $this;
        $new->FindServicesRequest = $FindServicesRequest;

        return $new;
    }


}

