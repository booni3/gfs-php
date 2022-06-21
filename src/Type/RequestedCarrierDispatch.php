<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedCarrierDispatch implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CarrierDispatchRequest
     */
    private $CarrierDispatchRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CarrierDispatchRequest $CarrierDispatchRequest
     */
    public function __construct($CarrierDispatchRequest)
    {
        $this->CarrierDispatchRequest = $CarrierDispatchRequest;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierDispatchRequest
     */
    public function getCarrierDispatchRequest()
    {
        return $this->CarrierDispatchRequest;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierDispatchRequest $CarrierDispatchRequest
     * @return RequestedCarrierDispatch
     */
    public function withCarrierDispatchRequest($CarrierDispatchRequest)
    {
        $new = clone $this;
        $new->CarrierDispatchRequest = $CarrierDispatchRequest;

        return $new;
    }


}

