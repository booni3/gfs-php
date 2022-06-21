<?php

namespace Booni3\GFS\Type;

class FindAvailableServicesRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $DepartmentCode;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return FindAvailableServicesRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return FindAvailableServicesRequest
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return FindAvailableServicesRequest
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return FindAvailableServicesRequest
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
    public function getDepartmentCode()
    {
        return $this->DepartmentCode;
    }

    /**
     * @param string $DepartmentCode
     * @return FindAvailableServicesRequest
     */
    public function withDepartmentCode($DepartmentCode)
    {
        $new = clone $this;
        $new->DepartmentCode = $DepartmentCode;

        return $new;
    }


}

