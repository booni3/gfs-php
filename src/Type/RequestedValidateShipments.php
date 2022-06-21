<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedValidateShipments implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipRequests
     */
    private $ShipRequests;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ShipRequests $ShipRequests
     */
    public function __construct($ShipRequests)
    {
        $this->ShipRequests = $ShipRequests;
    }

    /**
     * @return \Booni3\GFS\Type\ShipRequests
     */
    public function getShipRequests()
    {
        return $this->ShipRequests;
    }

    /**
     * @param \Booni3\GFS\Type\ShipRequests $ShipRequests
     * @return RequestedValidateShipments
     */
    public function withShipRequests($ShipRequests)
    {
        $new = clone $this;
        $new->ShipRequests = $ShipRequests;

        return $new;
    }


}

