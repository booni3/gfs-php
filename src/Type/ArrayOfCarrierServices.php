<?php

namespace Booni3\GFS\Type;

class ArrayOfCarrierServices
{

    /**
     * @var \Booni3\GFS\Type\CarrierServices
     */
    private $CarrierServices;

    /**
     * @return \Booni3\GFS\Type\CarrierServices
     */
    public function getCarrierServices()
    {
        return $this->CarrierServices;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServices $CarrierServices
     * @return ArrayOfCarrierServices
     */
    public function withCarrierServices($CarrierServices)
    {
        $new = clone $this;
        $new->CarrierServices = $CarrierServices;

        return $new;
    }


}

