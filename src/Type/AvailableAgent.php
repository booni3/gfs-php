<?php

namespace Booni3\GFS\Type;

class AvailableAgent
{

    /**
     * @var string
     */
    private $SiteNumber;

    /**
     * @var string
     */
    private $SiteName;

    /**
     * @var string
     */
    private $Street;

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
    private $HDNCode;

    /**
     * @var string
     */
    private $WorkMonday;

    /**
     * @var string
     */
    private $WorkTuesday;

    /**
     * @var string
     */
    private $WorkWednesday;

    /**
     * @var string
     */
    private $WorkThursday;

    /**
     * @var string
     */
    private $WorkFriday;

    /**
     * @var string
     */
    private $WorkSaturday;

    /**
     * @var string
     */
    private $WorkSunday;

    /**
     * @return string
     */
    public function getSiteNumber()
    {
        return $this->SiteNumber;
    }

    /**
     * @param string $SiteNumber
     * @return AvailableAgent
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
     * @return AvailableAgent
     */
    public function withSiteName($SiteName)
    {
        $new = clone $this;
        $new->SiteName = $SiteName;

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
     * @return AvailableAgent
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
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     * @return AvailableAgent
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
     * @return AvailableAgent
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
     * @return AvailableAgent
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
    public function getHDNCode()
    {
        return $this->HDNCode;
    }

    /**
     * @param string $HDNCode
     * @return AvailableAgent
     */
    public function withHDNCode($HDNCode)
    {
        $new = clone $this;
        $new->HDNCode = $HDNCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkMonday()
    {
        return $this->WorkMonday;
    }

    /**
     * @param string $WorkMonday
     * @return AvailableAgent
     */
    public function withWorkMonday($WorkMonday)
    {
        $new = clone $this;
        $new->WorkMonday = $WorkMonday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkTuesday()
    {
        return $this->WorkTuesday;
    }

    /**
     * @param string $WorkTuesday
     * @return AvailableAgent
     */
    public function withWorkTuesday($WorkTuesday)
    {
        $new = clone $this;
        $new->WorkTuesday = $WorkTuesday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkWednesday()
    {
        return $this->WorkWednesday;
    }

    /**
     * @param string $WorkWednesday
     * @return AvailableAgent
     */
    public function withWorkWednesday($WorkWednesday)
    {
        $new = clone $this;
        $new->WorkWednesday = $WorkWednesday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkThursday()
    {
        return $this->WorkThursday;
    }

    /**
     * @param string $WorkThursday
     * @return AvailableAgent
     */
    public function withWorkThursday($WorkThursday)
    {
        $new = clone $this;
        $new->WorkThursday = $WorkThursday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkFriday()
    {
        return $this->WorkFriday;
    }

    /**
     * @param string $WorkFriday
     * @return AvailableAgent
     */
    public function withWorkFriday($WorkFriday)
    {
        $new = clone $this;
        $new->WorkFriday = $WorkFriday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkSaturday()
    {
        return $this->WorkSaturday;
    }

    /**
     * @param string $WorkSaturday
     * @return AvailableAgent
     */
    public function withWorkSaturday($WorkSaturday)
    {
        $new = clone $this;
        $new->WorkSaturday = $WorkSaturday;

        return $new;
    }

    /**
     * @return string
     */
    public function getWorkSunday()
    {
        return $this->WorkSunday;
    }

    /**
     * @param string $WorkSunday
     * @return AvailableAgent
     */
    public function withWorkSunday($WorkSunday)
    {
        $new = clone $this;
        $new->WorkSunday = $WorkSunday;

        return $new;
    }


}

