<?php

namespace Booni3\GFS\Type;

class ArrayOfValidatedShipment
{

    /**
     * @var \Booni3\GFS\Type\ValidatedShipment
     */
    private $ValidatedShipment;

    /**
     * @return \Booni3\GFS\Type\ValidatedShipment
     */
    public function getValidatedShipment()
    {
        return $this->ValidatedShipment;
    }

    /**
     * @param \Booni3\GFS\Type\ValidatedShipment $ValidatedShipment
     * @return ArrayOfValidatedShipment
     */
    public function withValidatedShipment($ValidatedShipment)
    {
        $new = clone $this;
        $new->ValidatedShipment = $ValidatedShipment;

        return $new;
    }


}

