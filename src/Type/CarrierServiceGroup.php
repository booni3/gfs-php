<?php

namespace Booni3\GFS\Type;

class CarrierServiceGroup
{

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ServiceType;

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return CarrierServiceGroup
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
    public function getServiceType()
    {
        return $this->ServiceType;
    }

    /**
     * @param string $ServiceType
     * @return CarrierServiceGroup
     */
    public function withServiceType($ServiceType)
    {
        $new = clone $this;
        $new->ServiceType = $ServiceType;

        return $new;
    }


}

