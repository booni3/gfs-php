<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedCommitShipments implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CommitShipmentsRequest
     */
    private $CarrierShipments;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CommitShipmentsRequest $CarrierShipments
     */
    public function __construct($CarrierShipments)
    {
        $this->CarrierShipments = $CarrierShipments;
    }

    /**
     * @return \Booni3\GFS\Type\CommitShipmentsRequest
     */
    public function getCarrierShipments()
    {
        return $this->CarrierShipments;
    }

    /**
     * @param \Booni3\GFS\Type\CommitShipmentsRequest $CarrierShipments
     * @return RequestedCommitShipments
     */
    public function withCarrierShipments($CarrierShipments)
    {
        $new = clone $this;
        $new->CarrierShipments = $CarrierShipments;

        return $new;
    }


}

