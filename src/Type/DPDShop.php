<?php

namespace Booni3\GFS\Type;

class DPDShop
{

    /**
     * @var string
     */
    private $LocationID;

    /**
     * @var string
     */
    private $Company;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $District;

    /**
     * @var string
     */
    private $Town;

    /**
     * @var string
     */
    private $City;

    /**
     * @var string
     */
    private $County;

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
    private $DisableAccess;

    /**
     * @var string
     */
    private $AvailableParking;

    /**
     * @var string
     */
    private $Contact;

    /**
     * @var string
     */
    private $OpenLate;

    /**
     * @var string
     */
    private $OpenSaturday;

    /**
     * @var string
     */
    private $OpenSunday;

    /**
     * @return string
     */
    public function getLocationID()
    {
        return $this->LocationID;
    }

    /**
     * @param string $LocationID
     * @return DPDShop
     */
    public function withLocationID($LocationID)
    {
        $new = clone $this;
        $new->LocationID = $LocationID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return DPDShop
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return DPDShop
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getDistrict()
    {
        return $this->District;
    }

    /**
     * @param string $District
     * @return DPDShop
     */
    public function withDistrict($District)
    {
        $new = clone $this;
        $new->District = $District;

        return $new;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->Town;
    }

    /**
     * @param string $Town
     * @return DPDShop
     */
    public function withTown($Town)
    {
        $new = clone $this;
        $new->Town = $Town;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return DPDShop
     */
    public function withCity($City)
    {
        $new = clone $this;
        $new->City = $City;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->County;
    }

    /**
     * @param string $County
     * @return DPDShop
     */
    public function withCounty($County)
    {
        $new = clone $this;
        $new->County = $County;

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
     * @return DPDShop
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
     * @return DPDShop
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
    public function getDisableAccess()
    {
        return $this->DisableAccess;
    }

    /**
     * @param string $DisableAccess
     * @return DPDShop
     */
    public function withDisableAccess($DisableAccess)
    {
        $new = clone $this;
        $new->DisableAccess = $DisableAccess;

        return $new;
    }

    /**
     * @return string
     */
    public function getAvailableParking()
    {
        return $this->AvailableParking;
    }

    /**
     * @param string $AvailableParking
     * @return DPDShop
     */
    public function withAvailableParking($AvailableParking)
    {
        $new = clone $this;
        $new->AvailableParking = $AvailableParking;

        return $new;
    }

    /**
     * @return string
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param string $Contact
     * @return DPDShop
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenLate()
    {
        return $this->OpenLate;
    }

    /**
     * @param string $OpenLate
     * @return DPDShop
     */
    public function withOpenLate($OpenLate)
    {
        $new = clone $this;
        $new->OpenLate = $OpenLate;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenSaturday()
    {
        return $this->OpenSaturday;
    }

    /**
     * @param string $OpenSaturday
     * @return DPDShop
     */
    public function withOpenSaturday($OpenSaturday)
    {
        $new = clone $this;
        $new->OpenSaturday = $OpenSaturday;

        return $new;
    }

    /**
     * @return string
     */
    public function getOpenSunday()
    {
        return $this->OpenSunday;
    }

    /**
     * @param string $OpenSunday
     * @return DPDShop
     */
    public function withOpenSunday($OpenSunday)
    {
        $new = clone $this;
        $new->OpenSunday = $OpenSunday;

        return $new;
    }


}

