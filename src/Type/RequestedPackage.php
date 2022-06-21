<?php

namespace Booni3\GFS\Type;

class RequestedPackage
{

    /**
     * @var string
     */
    private $Origin;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $PackageCost;

    /**
     * @var string
     */
    private $PackageType;

    /**
     * @var bool
     */
    private $ExpLicense;

    /**
     * @var \Booni3\GFS\Type\ArrayOfPackageUnit
     */
    private $PackageUnits;

    /**
     * @var int
     */
    private $ItemID;

    /**
     * @var float
     */
    private $Weight;

    /**
     * @var \Booni3\GFS\Type\Dimensions
     */
    private $Dimensions;

    /**
     * @var string
     */
    private $Content;

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return RequestedPackage
     */
    public function withOrigin($Origin)
    {
        $new = clone $this;
        $new->Origin = $Origin;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getPackageCost()
    {
        return $this->PackageCost;
    }

    /**
     * @param \Booni3\GFS\Type\Money $PackageCost
     * @return RequestedPackage
     */
    public function withPackageCost($PackageCost)
    {
        $new = clone $this;
        $new->PackageCost = $PackageCost;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackageType()
    {
        return $this->PackageType;
    }

    /**
     * @param string $PackageType
     * @return RequestedPackage
     */
    public function withPackageType($PackageType)
    {
        $new = clone $this;
        $new->PackageType = $PackageType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExpLicense()
    {
        return $this->ExpLicense;
    }

    /**
     * @param bool $ExpLicense
     * @return RequestedPackage
     */
    public function withExpLicense($ExpLicense)
    {
        $new = clone $this;
        $new->ExpLicense = $ExpLicense;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfPackageUnit
     */
    public function getPackageUnits()
    {
        return $this->PackageUnits;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfPackageUnit $PackageUnits
     * @return RequestedPackage
     */
    public function withPackageUnits($PackageUnits)
    {
        $new = clone $this;
        $new->PackageUnits = $PackageUnits;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param int $ItemID
     * @return RequestedPackage
     */
    public function withItemID($ItemID)
    {
        $new = clone $this;
        $new->ItemID = $ItemID;

        return $new;
    }

    /**
     * @return float
     */
    public function getWeight()
    {
        return $this->Weight;
    }

    /**
     * @param float $Weight
     * @return RequestedPackage
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param \Booni3\GFS\Type\Dimensions $Dimensions
     * @return RequestedPackage
     */
    public function withDimensions($Dimensions)
    {
        $new = clone $this;
        $new->Dimensions = $Dimensions;

        return $new;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return RequestedPackage
     */
    public function withContent($Content)
    {
        $new = clone $this;
        $new->Content = $Content;

        return $new;
    }


}

