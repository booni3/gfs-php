<?php

namespace Booni3\GFS\Type;

class ArrayOfShipment
{

    /**
     * @var \Booni3\GFS\Type\Shipment
     */
    private $Shipment;

    /**
     * @return \Booni3\GFS\Type\Shipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param \Booni3\GFS\Type\Shipment $Shipment
     * @return ArrayOfShipment
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

        return $new;
    }


}

