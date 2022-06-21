<?php

namespace Booni3\GFS\Type;

class FoundAvailableService
{

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ServiceCode;

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return FoundAvailableService
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
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return FoundAvailableService
     */
    public function withServiceCode($ServiceCode)
    {
        $new = clone $this;
        $new->ServiceCode = $ServiceCode;

        return $new;
    }


}

