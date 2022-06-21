<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedCommitShipGroup implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CommitShipGroupRequest
     */
    private $ShipGroupRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CommitShipGroupRequest $ShipGroupRequest
     */
    public function __construct($ShipGroupRequest)
    {
        $this->ShipGroupRequest = $ShipGroupRequest;
    }

    /**
     * @return \Booni3\GFS\Type\CommitShipGroupRequest
     */
    public function getShipGroupRequest()
    {
        return $this->ShipGroupRequest;
    }

    /**
     * @param \Booni3\GFS\Type\CommitShipGroupRequest $ShipGroupRequest
     * @return RequestedCommitShipGroup
     */
    public function withShipGroupRequest($ShipGroupRequest)
    {
        $new = clone $this;
        $new->ShipGroupRequest = $ShipGroupRequest;

        return $new;
    }


}

