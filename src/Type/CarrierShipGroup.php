<?php

namespace Booni3\GFS\Type;

class CarrierShipGroup
{

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $Consignments;

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return CarrierShipGroup
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsignments()
    {
        return $this->Consignments;
    }

    /**
     * @param string $Consignments
     * @return CarrierShipGroup
     */
    public function withConsignments($Consignments)
    {
        $new = clone $this;
        $new->Consignments = $Consignments;

        return $new;
    }


}

