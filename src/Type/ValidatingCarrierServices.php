<?php

namespace Booni3\GFS\Type;

class ValidatingCarrierServices
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    private $RequestedServices;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $FromAddress;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $ToAddress;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ValidatingCarrierServices
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    public function getRequestedServices()
    {
        return $this->RequestedServices;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfCarrierServices $RequestedServices
     * @return ValidatingCarrierServices
     */
    public function withRequestedServices($RequestedServices)
    {
        $new = clone $this;
        $new->RequestedServices = $RequestedServices;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getFromAddress()
    {
        return $this->FromAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $FromAddress
     * @return ValidatingCarrierServices
     */
    public function withFromAddress($FromAddress)
    {
        $new = clone $this;
        $new->FromAddress = $FromAddress;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getToAddress()
    {
        return $this->ToAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $ToAddress
     * @return ValidatingCarrierServices
     */
    public function withToAddress($ToAddress)
    {
        $new = clone $this;
        $new->ToAddress = $ToAddress;

        return $new;
    }


}

