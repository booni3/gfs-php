<?php

namespace Booni3\GFS\Type;

class FoundLocationDetails
{

    /**
     * @var string
     */
    private $BusinessName;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $BusinessAddress;

    /**
     * @var string
     */
    private $LocationTypes;

    /**
     * @var float
     */
    private $Distance;

    /**
     * @var string
     */
    private $BusinessDescription;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $DropoffInterval;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $SaturdayInterval;

    /**
     * @return string
     */
    public function getBusinessName()
    {
        return $this->BusinessName;
    }

    /**
     * @param string $BusinessName
     * @return FoundLocationDetails
     */
    public function withBusinessName($BusinessName)
    {
        $new = clone $this;
        $new->BusinessName = $BusinessName;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getBusinessAddress()
    {
        return $this->BusinessAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $BusinessAddress
     * @return FoundLocationDetails
     */
    public function withBusinessAddress($BusinessAddress)
    {
        $new = clone $this;
        $new->BusinessAddress = $BusinessAddress;

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
     * @return FoundLocationDetails
     */
    public function withLocationTypes($LocationTypes)
    {
        $new = clone $this;
        $new->LocationTypes = $LocationTypes;

        return $new;
    }

    /**
     * @return float
     */
    public function getDistance()
    {
        return $this->Distance;
    }

    /**
     * @param float $Distance
     * @return FoundLocationDetails
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
    public function getBusinessDescription()
    {
        return $this->BusinessDescription;
    }

    /**
     * @param string $BusinessDescription
     * @return FoundLocationDetails
     */
    public function withBusinessDescription($BusinessDescription)
    {
        $new = clone $this;
        $new->BusinessDescription = $BusinessDescription;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getDropoffInterval()
    {
        return $this->DropoffInterval;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $DropoffInterval
     * @return FoundLocationDetails
     */
    public function withDropoffInterval($DropoffInterval)
    {
        $new = clone $this;
        $new->DropoffInterval = $DropoffInterval;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getSaturdayInterval()
    {
        return $this->SaturdayInterval;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $SaturdayInterval
     * @return FoundLocationDetails
     */
    public function withSaturdayInterval($SaturdayInterval)
    {
        $new = clone $this;
        $new->SaturdayInterval = $SaturdayInterval;

        return $new;
    }


}

