<?php

namespace Booni3\GFS\Type;

class ValidateUKAddressRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $CheckAddress;

    /**
     * @var bool
     */
    private $SingleAddress;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ValidateUKAddressRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getCheckAddress()
    {
        return $this->CheckAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $CheckAddress
     * @return ValidateUKAddressRequest
     */
    public function withCheckAddress($CheckAddress)
    {
        $new = clone $this;
        $new->CheckAddress = $CheckAddress;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSingleAddress()
    {
        return $this->SingleAddress;
    }

    /**
     * @param bool $SingleAddress
     * @return ValidateUKAddressRequest
     */
    public function withSingleAddress($SingleAddress)
    {
        $new = clone $this;
        $new->SingleAddress = $SingleAddress;

        return $new;
    }


}

