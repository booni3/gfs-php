<?php

namespace Booni3\GFS\Type;

class CarrierServices
{

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var \Booni3\GFS\Type\ArrayOfString
     */
    private $Services;

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return CarrierServices
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfString
     */
    public function getServices()
    {
        return $this->Services;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfString $Services
     * @return CarrierServices
     */
    public function withServices($Services)
    {
        $new = clone $this;
        $new->Services = $Services;

        return $new;
    }


}

