<?php

namespace Booni3\GFS\Type;

class CAReply
{

    /**
     * @var \Booni3\GFS\Type\ArrayOfShipment
     */
    private $Shipments;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $Status;

    /**
     * @return \Booni3\GFS\Type\ArrayOfShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfShipment $Shipments
     * @return CAReply
     */
    public function withShipments($Shipments)
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $Status
     * @return CAReply
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

