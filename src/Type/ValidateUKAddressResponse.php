<?php

namespace Booni3\GFS\Type;

class ValidateUKAddressResponse
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $FoundAddress;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return ValidateUKAddressResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getFoundAddress()
    {
        return $this->FoundAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $FoundAddress
     * @return ValidateUKAddressResponse
     */
    public function withFoundAddress($FoundAddress)
    {
        $new = clone $this;
        $new->FoundAddress = $FoundAddress;

        return $new;
    }


}

