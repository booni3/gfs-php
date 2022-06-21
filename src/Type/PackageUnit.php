<?php

namespace Booni3\GFS\Type;

class PackageUnit
{

    /**
     * @var string
     */
    private $HarmCode;

    /**
     * @var string
     */
    private $HarmKeyWords;

    /**
     * @var string
     */
    private $UnitType;

    /**
     * @var int
     */
    private $Quantity;

    /**
     * @var float
     */
    private $Weight;

    /**
     * @var float
     */
    private $Price;

    /**
     * @var string
     */
    private $Content;

    /**
     * @var string
     */
    private $Origin;

    /**
     * @return string
     */
    public function getHarmCode()
    {
        return $this->HarmCode;
    }

    /**
     * @param string $HarmCode
     * @return PackageUnit
     */
    public function withHarmCode($HarmCode)
    {
        $new = clone $this;
        $new->HarmCode = $HarmCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getHarmKeyWords()
    {
        return $this->HarmKeyWords;
    }

    /**
     * @param string $HarmKeyWords
     * @return PackageUnit
     */
    public function withHarmKeyWords($HarmKeyWords)
    {
        $new = clone $this;
        $new->HarmKeyWords = $HarmKeyWords;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnitType()
    {
        return $this->UnitType;
    }

    /**
     * @param string $UnitType
     * @return PackageUnit
     */
    public function withUnitType($UnitType)
    {
        $new = clone $this;
        $new->UnitType = $UnitType;

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
     * @return PackageUnit
     */
    public function withQuantity($Quantity)
    {
        $new = clone $this;
        $new->Quantity = $Quantity;

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
     * @return PackageUnit
     */
    public function withWeight($Weight)
    {
        $new = clone $this;
        $new->Weight = $Weight;

        return $new;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->Price;
    }

    /**
     * @param float $Price
     * @return PackageUnit
     */
    public function withPrice($Price)
    {
        $new = clone $this;
        $new->Price = $Price;

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
     * @return PackageUnit
     */
    public function withContent($Content)
    {
        $new = clone $this;
        $new->Content = $Content;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return PackageUnit
     */
    public function withOrigin($Origin)
    {
        $new = clone $this;
        $new->Origin = $Origin;

        return $new;
    }


}

