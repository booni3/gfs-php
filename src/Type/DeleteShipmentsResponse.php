<?php

namespace Booni3\GFS\Type;

class DeleteShipmentsResponse
{

    /**
     * @var \Booni3\GFS\Type\ProcessedDeleteShipment
     */
    private $Shipments;

    /**
     * @var string
     */
    private $Status;

    /**
     * @return \Booni3\GFS\Type\ProcessedDeleteShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \Booni3\GFS\Type\ProcessedDeleteShipment $Shipments
     * @return DeleteShipmentsResponse
     */
    public function withShipments($Shipments)
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return DeleteShipmentsResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

