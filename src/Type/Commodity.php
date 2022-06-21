<?php

namespace Booni3\GFS\Type;

class Commodity
{

    /**
     * @var string
     */
    private $QuantityUnitCode;

    /**
     * @var string
     */
    private $ShortDesc;

    /**
     * @var string
     */
    private $Composition;

    /**
     * @var string
     */
    private $SKU;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $USPrice;

    /**
     * @var \Booni3\GFS\Type\Dimensions
     */
    private $Dimensions;

    /**
     * @var string
     */
    private $MarksAndCount;

    /**
     * @var string
     */
    private $CountryOfManufacture;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $CustomsValue;

    /**
     * @var string
     */
    private $Description;

    /**
     * @var string
     */
    private $ExportLicense;

    /**
     * @var \DateTimeInterface
     */
    private $ExportLicenseExpirationDate;

    /**
     * @var string
     */
    private $HarmonizedCode;

    /**
     * @var int
     */
    private $NumberOfPieces;

    /**
     * @var int
     */
    private $Quantity;

    /**
     * @var string
     */
    private $QuantityUnits;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $UnitPrice;

    /**
     * @var float
     */
    private $Weight;

    /**
     * @return string
     */
    public function getQuantityUnitCode()
    {
        return $this->QuantityUnitCode;
    }

    /**
     * @param string $QuantityUnitCode
     * @return Commodity
     */
    public function withQuantityUnitCode($QuantityUnitCode)
    {
        $new = clone $this;
        $new->QuantityUnitCode = $QuantityUnitCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getShortDesc()
    {
        return $this->ShortDesc;
    }

    /**
     * @param string $ShortDesc
     * @return Commodity
     */
    public function withShortDesc($ShortDesc)
    {
        $new = clone $this;
        $new->ShortDesc = $ShortDesc;

        return $new;
    }

    /**
     * @return string
     */
    public function getComposition()
    {
        return $this->Composition;
    }

    /**
     * @param string $Composition
     * @return Commodity
     */
    public function withComposition($Composition)
    {
        $new = clone $this;
        $new->Composition = $Composition;

        return $new;
    }

    /**
     * @return string
     */
    public function getSKU()
    {
        return $this->SKU;
    }

    /**
     * @param string $SKU
     * @return Commodity
     */
    public function withSKU($SKU)
    {
        $new = clone $this;
        $new->SKU = $SKU;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getUSPrice()
    {
        return $this->USPrice;
    }

    /**
     * @param \Booni3\GFS\Type\Money $USPrice
     * @return Commodity
     */
    public function withUSPrice($USPrice)
    {
        $new = clone $this;
        $new->USPrice = $USPrice;

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
     * @return Commodity
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
    public function getMarksAndCount()
    {
        return $this->MarksAndCount;
    }

    /**
     * @param string $MarksAndCount
     * @return Commodity
     */
    public function withMarksAndCount($MarksAndCount)
    {
        $new = clone $this;
        $new->MarksAndCount = $MarksAndCount;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * @param string $CountryOfManufacture
     * @return Commodity
     */
    public function withCountryOfManufacture($CountryOfManufacture)
    {
        $new = clone $this;
        $new->CountryOfManufacture = $CountryOfManufacture;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getCustomsValue()
    {
        return $this->CustomsValue;
    }

    /**
     * @param \Booni3\GFS\Type\Money $CustomsValue
     * @return Commodity
     */
    public function withCustomsValue($CustomsValue)
    {
        $new = clone $this;
        $new->CustomsValue = $CustomsValue;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * @param string $Description
     * @return Commodity
     */
    public function withDescription($Description)
    {
        $new = clone $this;
        $new->Description = $Description;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportLicense()
    {
        return $this->ExportLicense;
    }

    /**
     * @param string $ExportLicense
     * @return Commodity
     */
    public function withExportLicense($ExportLicense)
    {
        $new = clone $this;
        $new->ExportLicense = $ExportLicense;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExportLicenseExpirationDate()
    {
        return $this->ExportLicenseExpirationDate;
    }

    /**
     * @param \DateTimeInterface $ExportLicenseExpirationDate
     * @return Commodity
     */
    public function withExportLicenseExpirationDate($ExportLicenseExpirationDate)
    {
        $new = clone $this;
        $new->ExportLicenseExpirationDate = $ExportLicenseExpirationDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->HarmonizedCode;
    }

    /**
     * @param string $HarmonizedCode
     * @return Commodity
     */
    public function withHarmonizedCode($HarmonizedCode)
    {
        $new = clone $this;
        $new->HarmonizedCode = $HarmonizedCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getNumberOfPieces()
    {
        return $this->NumberOfPieces;
    }

    /**
     * @param int $NumberOfPieces
     * @return Commodity
     */
    public function withNumberOfPieces($NumberOfPieces)
    {
        $new = clone $this;
        $new->NumberOfPieces = $NumberOfPieces;

        return $new;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->Quantity;
    }

    /**
     * @param int $Quantity
     * @return Commodity
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
    public function getQuantityUnits()
    {
        return $this->QuantityUnits;
    }

    /**
     * @param string $QuantityUnits
     * @return Commodity
     */
    public function withQuantityUnits($QuantityUnits)
    {
        $new = clone $this;
        $new->QuantityUnits = $QuantityUnits;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * @param \Booni3\GFS\Type\Money $UnitPrice
     * @return Commodity
     */
    public function withUnitPrice($UnitPrice)
    {
        $new = clone $this;
        $new->UnitPrice = $UnitPrice;

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
     * @return Commodity
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }


}

