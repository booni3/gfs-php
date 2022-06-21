<?php

namespace Booni3\GFS\Type;

class ShipReply
{

    /**
     * @var string
     */
    private $ResponseStatus;

    /**
     * @var \Booni3\GFS\Type\ProcessedShipment
     */
    private $Shipment;

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }

    /**
     * @param string $ResponseStatus
     * @return ShipReply
     */
    public function withResponseStatus($ResponseStatus)
    {
        $new = clone $this;
        $new->ResponseStatus = $ResponseStatus;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ProcessedShipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param \Booni3\GFS\Type\ProcessedShipment $Shipment
     * @return ShipReply
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

        return $new;
    }


}

