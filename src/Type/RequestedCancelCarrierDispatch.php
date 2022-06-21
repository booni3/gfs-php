<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedCancelCarrierDispatch implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CancelCarrierDispatchRequest
     */
    private $CarrierDispatchRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CancelCarrierDispatchRequest $CarrierDispatchRequest
     */
    public function __construct($CarrierDispatchRequest)
    {
        $this->CarrierDispatchRequest = $CarrierDispatchRequest;
    }

    /**
     * @return \Booni3\GFS\Type\CancelCarrierDispatchRequest
     */
    public function getCarrierDispatchRequest()
    {
        return $this->CarrierDispatchRequest;
    }

    /**
     * @param \Booni3\GFS\Type\CancelCarrierDispatchRequest $CarrierDispatchRequest
     * @return RequestedCancelCarrierDispatch
     */
    public function withCarrierDispatchRequest($CarrierDispatchRequest)
    {
        $new = clone $this;
        $new->CarrierDispatchRequest = $CarrierDispatchRequest;

        return $new;
    }


}

