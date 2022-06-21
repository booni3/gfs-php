<?php

namespace Booni3\GFS\Type;

class RefrigDetails
{

    /**
     * @var float
     */
    private $IceWeight;

    /**
     * @return float
     */
    public function getIceWeight()
    {
        return $this->IceWeight;
    }

    /**
     * @param float $IceWeight
     * @return RefrigDetails
     */
    public function withIceWeight($IceWeight)
    {
        $new = clone $this;
        $new->IceWeight = $IceWeight;

        return $new;
    }


}

