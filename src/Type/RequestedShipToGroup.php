<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedShipToGroup implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipToGroupRequest
     */
    private $ShipToGroupRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ShipToGroupRequest $ShipToGroupRequest
     */
    public function __construct($ShipToGroupRequest)
    {
        $this->ShipToGroupRequest = $ShipToGroupRequest;
    }

    /**
     * @return \Booni3\GFS\Type\ShipToGroupRequest
     */
    public function getShipToGroupRequest()
    {
        return $this->ShipToGroupRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ShipToGroupRequest $ShipToGroupRequest
     * @return RequestedShipToGroup
     */
    public function withShipToGroupRequest($ShipToGroupRequest)
    {
        $new = clone $this;
        $new->ShipToGroupRequest = $ShipToGroupRequest;

        return $new;
    }


}

