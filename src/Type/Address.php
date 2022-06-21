<?php

namespace Booni3\GFS\Type;

class Address
{

    /**
     * @var \Booni3\GFS\Type\Geocode
     */
    private $Geocode;

    /**
     * @var string
     */
    private $AddressReference;

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
    private $County;

    /**
     * @var string
     */
    private $Town;

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
    private $UrbanCode;

    /**
     * @var bool
     */
    private $Residential;

    /**
     * @return \Booni3\GFS\Type\Geocode
     */
    public function getGeocode()
    {
        return $this->Geocode;
    }

    /**
     * @param \Booni3\GFS\Type\Geocode $Geocode
     * @return Address
     */
    public function withGeocode($Geocode)
    {
        $new = clone $this;
        $new->Geocode = $Geocode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddressReference()
    {
        return $this->AddressReference;
    }

    /**
     * @param string $AddressReference
     * @return Address
     */
    public function withAddressReference($AddressReference)
    {
        $new = clone $this;
        $new->AddressReference = $AddressReference;

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
     * @return Address
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
     * @return Address
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
    public function getCounty()
    {
        return $this->County;
    }

    /**
     * @param string $County
     * @return Address
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
    public function getTown()
    {
        return $this->Town;
    }

    /**
     * @param string $Town
     * @return Address
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
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return Address
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
     * @return Address
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
    public function getUrbanCode()
    {
        return $this->UrbanCode;
    }

    /**
     * @param string $UrbanCode
     * @return Address
     */
    public function withUrbanCode($UrbanCode)
    {
        $new = clone $this;
        $new->UrbanCode = $UrbanCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getResidential()
    {
        return $this->Residential;
    }

    /**
     * @param bool $Residential
     * @return Address
     */
    public function withResidential($Residential)
    {
        $new = clone $this;
        $new->Residential = $Residential;

        return $new;
    }


}

