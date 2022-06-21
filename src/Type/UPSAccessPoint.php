<?php

namespace Booni3\GFS\Type;

class UPSAccessPoint
{

    /**
     * @var string
     */
    private $NonStandardHoursOfOperation;

    /**
     * @var string
     */
    private $StandardHoursOfOperation;

    /**
     * @var string
     */
    private $LatestAirDropOffTime;

    /**
     * @var string
     */
    private $LatestGroundDropOffTime;

    /**
     * @var string
     */
    private $Distance;

    /**
     * @var string
     */
    private $LocationTypes;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $EMail;

    /**
     * @var string
     */
    private $AccessPointID;

    /**
     * @var string
     */
    private $CompanyName;

    /**
     * @var string
     */
    private $AttentionName;

    /**
     * @var \Booni3\GFS\Type\Geocode
     */
    private $Geocode;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $AccessPointAddress;

    /**
     * @return string
     */
    public function getNonStandardHoursOfOperation()
    {
        return $this->NonStandardHoursOfOperation;
    }

    /**
     * @param string $NonStandardHoursOfOperation
     * @return UPSAccessPoint
     */
    public function withNonStandardHoursOfOperation($NonStandardHoursOfOperation)
    {
        $new = clone $this;
        $new->NonStandardHoursOfOperation = $NonStandardHoursOfOperation;

        return $new;
    }

    /**
     * @return string
     */
    public function getStandardHoursOfOperation()
    {
        return $this->StandardHoursOfOperation;
    }

    /**
     * @param string $StandardHoursOfOperation
     * @return UPSAccessPoint
     */
    public function withStandardHoursOfOperation($StandardHoursOfOperation)
    {
        $new = clone $this;
        $new->StandardHoursOfOperation = $StandardHoursOfOperation;

        return $new;
    }

    /**
     * @return string
     */
    public function getLatestAirDropOffTime()
    {
        return $this->LatestAirDropOffTime;
    }

    /**
     * @param string $LatestAirDropOffTime
     * @return UPSAccessPoint
     */
    public function withLatestAirDropOffTime($LatestAirDropOffTime)
    {
        $new = clone $this;
        $new->LatestAirDropOffTime = $LatestAirDropOffTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getLatestGroundDropOffTime()
    {
        return $this->LatestGroundDropOffTime;
    }

    /**
     * @param string $LatestGroundDropOffTime
     * @return UPSAccessPoint
     */
    public function withLatestGroundDropOffTime($LatestGroundDropOffTime)
    {
        $new = clone $this;
        $new->LatestGroundDropOffTime = $LatestGroundDropOffTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param string $Distance
     * @return UPSAccessPoint
     */
    public function withDistance($Distance)
    {
        $new = clone $this;
        $new->Distance = $Distance;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationTypes()
    {
        return $this->LocationTypes;
    }

    /**
     * @param string $LocationTypes
     * @return UPSAccessPoint
     */
    public function withLocationTypes($LocationTypes)
    {
        $new = clone $this;
        $new->LocationTypes = $LocationTypes;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return UPSAccessPoint
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return UPSAccessPoint
     */
    public function withEMail($EMail)
    {
        $new = clone $this;
        $new->EMail = $EMail;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccessPointID()
    {
        return $this->AccessPointID;
    }

    /**
     * @param string $AccessPointID
     * @return UPSAccessPoint
     */
    public function withAccessPointID($AccessPointID)
    {
        $new = clone $this;
        $new->AccessPointID = $AccessPointID;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     * @return UPSAccessPoint
     */
    public function withCompanyName($CompanyName)
    {
        $new = clone $this;
        $new->CompanyName = $CompanyName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAttentionName()
    {
        return $this->AttentionName;
    }

    /**
     * @param string $AttentionName
     * @return UPSAccessPoint
     */
    public function withAttentionName($AttentionName)
    {
        $new = clone $this;
        $new->AttentionName = $AttentionName;

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
     * @return UPSAccessPoint
     */
    public function withGeocode($Geocode)
    {
        $new = clone $this;
        $new->Geocode = $Geocode;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getAccessPointAddress()
    {
        return $this->AccessPointAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $AccessPointAddress
     * @return UPSAccessPoint
     */
    public function withAccessPointAddress($AccessPointAddress)
    {
        $new = clone $this;
        $new->AccessPointAddress = $AccessPointAddress;

        return $new;
    }


}

