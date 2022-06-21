<?php

namespace Booni3\GFS\Type;

class ArrayOfRequestedShipment
{

    /**
     * @var \Booni3\GFS\Type\RequestedShipment
     */
    private $RequestedShipment;

    /**
     * @return \Booni3\GFS\Type\RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedShipment $RequestedShipment
     * @return ArrayOfRequestedShipment
     */
    public function withRequestedShipment($RequestedShipment)
    {
        $new = clone $this;
        $new->RequestedShipment = $RequestedShipment;

        return $new;
    }


}

