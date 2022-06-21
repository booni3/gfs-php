<?php

namespace Booni3\GFS\Type;

class ShipReplies
{

    /**
     * @var string
     */
    private $ResponseStatus;

    /**
     * @var \Booni3\GFS\Type\ArrayOfProcessedShipment
     */
    private $Shipments;

    /**
     * @return string
     */
    public function getResponseStatus()
    {
        return $this->ResponseStatus;
    }

    /**
     * @param string $ResponseStatus
     * @return ShipReplies
     */
    public function withResponseStatus($ResponseStatus)
    {
        $new = clone $this;
        $new->ResponseStatus = $ResponseStatus;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfProcessedShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfProcessedShipment $Shipments
     * @return ShipReplies
     */
    public function withShipments($Shipments)
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

        return $new;
    }


}

