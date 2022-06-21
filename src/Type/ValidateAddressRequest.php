<?php

namespace Booni3\GFS\Type;

class ValidateAddressRequest
{

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $RequestedParty;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getRequestedParty()
    {
        return $this->RequestedParty;
    }

    /**
     * @param \Booni3\GFS\Type\Party $RequestedParty
     * @return ValidateAddressRequest
     */
    public function withRequestedParty($RequestedParty)
    {
        $new = clone $this;
        $new->RequestedParty = $RequestedParty;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ValidateAddressRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

