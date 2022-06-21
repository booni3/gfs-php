<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedCarrierLocation implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\FindLocationRequest
     */
    private $FindLocationRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\FindLocationRequest $FindLocationRequest
     */
    public function __construct($FindLocationRequest)
    {
        $this->FindLocationRequest = $FindLocationRequest;
    }

    /**
     * @return \Booni3\GFS\Type\FindLocationRequest
     */
    public function getFindLocationRequest()
    {
        return $this->FindLocationRequest;
    }

    /**
     * @param \Booni3\GFS\Type\FindLocationRequest $FindLocationRequest
     * @return RequestedCarrierLocation
     */
    public function withFindLocationRequest($FindLocationRequest)
    {
        $new = clone $this;
        $new->FindLocationRequest = $FindLocationRequest;

        return $new;
    }


}

