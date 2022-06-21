<?php

namespace Booni3\GFS\Type;

class DangerousDetails
{

    /**
     * @var \Booni3\GFS\Type\ArrayOfString
     */
    private $DotProperShippingName;

    /**
     * @var string
     */
    private $HazardClass;

    /**
     * @var string
     */
    private $HazardType;

    /**
     * @var bool
     */
    private $Accessibility;

    /**
     * @var bool
     */
    private $CargoAircraftOnly;

    /**
     * @var string
     */
    private $DotIdNumber;

    /**
     * @var string
     */
    private $DotLabelType;

    /**
     * @var string
     */
    private $PackingGroup;

    /**
     * @var string
     */
    private $Person24;

    /**
     * @var string
     */
    private $Phone24;

    /**
     * @var float
     */
    private $Quantity;

    /**
     * @var string
     */
    private $Units;

    /**
     * @return \Booni3\GFS\Type\ArrayOfString
     */
    public function getDotProperShippingName()
    {
        return $this->DotProperShippingName;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfString $DotProperShippingName
     * @return DangerousDetails
     */
    public function withDotProperShippingName($DotProperShippingName)
    {
        $new = clone $this;
        $new->DotProperShippingName = $DotProperShippingName;

        return $new;
    }

    /**
     * @return string
     */
    public function getHazardClass()
    {
        return $this->HazardClass;
    }

    /**
     * @param string $HazardClass
     * @return DangerousDetails
     */
    public function withHazardClass($HazardClass)
    {
        $new = clone $this;
        $new->HazardClass = $HazardClass;

        return $new;
    }

    /**
     * @return string
     */
    public function getHazardType()
    {
        return $this->HazardType;
    }

    /**
     * @param string $HazardType
     * @return DangerousDetails
     */
    public function withHazardType($HazardType)
    {
        $new = clone $this;
        $new->HazardType = $HazardType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }

    /**
     * @param bool $Accessibility
     * @return DangerousDetails
     */
    public function withAccessibility($Accessibility)
    {
        $new = clone $this;
        $new->Accessibility = $Accessibility;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }

    /**
     * @param bool $CargoAircraftOnly
     * @return DangerousDetails
     */
    public function withCargoAircraftOnly($CargoAircraftOnly)
    {
        $new = clone $this;
        $new->CargoAircraftOnly = $CargoAircraftOnly;

        return $new;
    }

    /**
     * @return string
     */
    public function getDotIdNumber()
    {
        return $this->DotIdNumber;
    }

    /**
     * @param string $DotIdNumber
     * @return DangerousDetails
     */
    public function withDotIdNumber($DotIdNumber)
    {
        $new = clone $this;
        $new->DotIdNumber = $DotIdNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getDotLabelType()
    {
        return $this->DotLabelType;
    }

    /**
     * @param string $DotLabelType
     * @return DangerousDetails
     */
    public function withDotLabelType($DotLabelType)
    {
        $new = clone $this;
        $new->DotLabelType = $DotLabelType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackingGroup()
    {
        return $this->PackingGroup;
    }

    /**
     * @param string $PackingGroup
     * @return DangerousDetails
     */
    public function withPackingGroup($PackingGroup)
    {
        $new = clone $this;
        $new->PackingGroup = $PackingGroup;

        return $new;
    }

    /**
     * @return string
     */
    public function getPerson24()
    {
        return $this->Person24;
    }

    /**
     * @param string $Person24
     * @return DangerousDetails
     */
    public function withPerson24($Person24)
    {
        $new = clone $this;
        $new->Person24 = $Person24;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone24()
    {
        return $this->Phone24;
    }

    /**
     * @param string $Phone24
     * @return DangerousDetails
     */
    public function withPhone24($Phone24)
    {
        $new = clone $this;
        $new->Phone24 = $Phone24;

        return $new;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param float $Quantity
     * @return DangerousDetails
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnits()
    {
        return $this->Units;
    }

    /**
     * @param string $Units
     * @return DangerousDetails
     */
    public function withUnits($Units)
    {
        $new = clone $this;
        $new->Units = $Units;

        return $new;
    }


}

