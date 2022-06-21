<?php

namespace Booni3\GFS\Type;

class PayPoint
{

    /**
     * @var string
     */
    private $AccessPointDelivery;

    /**
     * @var \Booni3\GFS\Type\Geocode
     */
    private $Geocode;

    /**
     * @var string
     */
    private $AccessPoint;

    /**
     * @var bool
     */
    private $AutoCheck;

    /**
     * @var string
     */
    private $SiteCountry;

    /**
     * @var string
     */
    private $SiteContact;

    /**
     * @var string
     */
    private $SiteNumber;

    /**
     * @var string
     */
    private $SiteName;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $PayPointAddress;

    /**
     * @var string
     */
    private $HDNCode;

    /**
     * @return string
     */
    public function getAccessPointDelivery()
    {
        return $this->AccessPointDelivery;
    }

    /**
     * @param string $AccessPointDelivery
     * @return PayPoint
     */
    public function withAccessPointDelivery($AccessPointDelivery)
    {
        $new = clone $this;
        $new->AccessPointDelivery = $AccessPointDelivery;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Geocode
     */
    public function getGeocode()
    {
        return $this->Geocode;
    }

    /**
     * @param \Booni3\GFS\Type\Geocode $Geocode
     * @return PayPoint
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
    public function getAccessPoint()
    {
        return $this->AccessPoint;
    }

    /**
     * @param string $AccessPoint
     * @return PayPoint
     */
    public function withAccessPoint($AccessPoint)
    {
        $new = clone $this;
        $new->AccessPoint = $AccessPoint;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAutoCheck()
    {
        return $this->AutoCheck;
    }

    /**
     * @param bool $AutoCheck
     * @return PayPoint
     */
    public function withAutoCheck($AutoCheck)
    {
        $new = clone $this;
        $new->AutoCheck = $AutoCheck;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteCountry()
    {
        return $this->SiteCountry;
    }

    /**
     * @param string $SiteCountry
     * @return PayPoint
     */
    public function withSiteCountry($SiteCountry)
    {
        $new = clone $this;
        $new->SiteCountry = $SiteCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteContact()
    {
        return $this->SiteContact;
    }

    /**
     * @param string $SiteContact
     * @return PayPoint
     */
    public function withSiteContact($SiteContact)
    {
        $new = clone $this;
        $new->SiteContact = $SiteContact;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteNumber()
    {
        return $this->SiteNumber;
    }

    /**
     * @param string $SiteNumber
     * @return PayPoint
     */
    public function withSiteNumber($SiteNumber)
    {
        $new = clone $this;
        $new->SiteNumber = $SiteNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getSiteName()
    {
        return $this->SiteName;
    }

    /**
     * @param string $SiteName
     * @return PayPoint
     */
    public function withSiteName($SiteName)
    {
        $new = clone $this;
        $new->SiteName = $SiteName;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getPayPointAddress()
    {
        return $this->PayPointAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $PayPointAddress
     * @return PayPoint
     */
    public function withPayPointAddress($PayPointAddress)
    {
        $new = clone $this;
        $new->PayPointAddress = $PayPointAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getHDNCode()
    {
        return $this->HDNCode;
    }

    /**
     * @param string $HDNCode
     * @return PayPoint
     */
    public function withHDNCode($HDNCode)
    {
        $new = clone $this;
        $new->HDNCode = $HDNCode;

        return $new;
    }


}

