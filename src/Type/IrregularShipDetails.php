<?php

namespace Booni3\GFS\Type;

class IrregularShipDetails
{

    /**
     * @var string
     */
    private $ShipOversize;

    /**
     * @return string
     */
    public function getShipOversize()
    {
        return $this->ShipOversize;
    }

    /**
     * @param string $ShipOversize
     * @return IrregularShipDetails
     */
    public function withShipOversize($ShipOversize)
    {
        $new = clone $this;
        $new->ShipOversize = $ShipOversize;

        return $new;
    }


}

