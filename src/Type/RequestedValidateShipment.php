<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedValidateShipment implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipRequest
     */
    private $ShipRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ShipRequest $ShipRequest
     */
    public function __construct($ShipRequest)
    {
        $this->ShipRequest = $ShipRequest;
    }

    /**
     * @return \Booni3\GFS\Type\ShipRequest
     */
    public function getShipRequest()
    {
        return $this->ShipRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ShipRequest $ShipRequest
     * @return RequestedValidateShipment
     */
    public function withShipRequest($ShipRequest)
    {
        $new = clone $this;
        $new->ShipRequest = $ShipRequest;

        return $new;
    }


}

