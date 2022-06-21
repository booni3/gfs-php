<?php

namespace Booni3\GFS\Type;

class UKMailOptions
{

    /**
     * @var string
     */
    private $TechLevel;

    /**
     * @var string
     */
    private $Swap;

    /**
     * @var string
     */
    private $Unpack;

    /**
     * @var bool
     */
    private $TwoMan;

    /**
     * @var bool
     */
    private $TailLift;

    /**
     * @var bool
     */
    private $DedicateVehicle;

    /**
     * @var bool
     */
    private $Person2Person;

    /**
     * @var bool
     */
    private $BookIn;

    /**
     * @var bool
     */
    private $LongLength;

    /**
     * @var bool
     */
    private $SwapOut;

    /**
     * @return string
     */
    public function getTechLevel()
    {
        return $this->TechLevel;
    }

    /**
     * @param string $TechLevel
     * @return UKMailOptions
     */
    public function withTechLevel($TechLevel)
    {
        $new = clone $this;
        $new->TechLevel = $TechLevel;

        return $new;
    }

    /**
     * @return string
     */
    public function getSwap()
    {
        return $this->Swap;
    }

    /**
     * @param string $Swap
     * @return UKMailOptions
     */
    public function withSwap($Swap)
    {
        $new = clone $this;
        $new->Swap = $Swap;

        return $new;
    }

    /**
     * @return string
     */
    public function getUnpack()
    {
        return $this->Unpack;
    }

    /**
     * @param string $Unpack
     * @return UKMailOptions
     */
    public function withUnpack($Unpack)
    {
        $new = clone $this;
        $new->Unpack = $Unpack;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTwoMan()
    {
        return $this->TwoMan;
    }

    /**
     * @param bool $TwoMan
     * @return UKMailOptions
     */
    public function withTwoMan($TwoMan)
    {
        $new = clone $this;
        $new->TwoMan = $TwoMan;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTailLift()
    {
        return $this->TailLift;
    }

    /**
     * @param bool $TailLift
     * @return UKMailOptions
     */
    public function withTailLift($TailLift)
    {
        $new = clone $this;
        $new->TailLift = $TailLift;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDedicateVehicle()
    {
        return $this->DedicateVehicle;
    }

    /**
     * @param bool $DedicateVehicle
     * @return UKMailOptions
     */
    public function withDedicateVehicle($DedicateVehicle)
    {
        $new = clone $this;
        $new->DedicateVehicle = $DedicateVehicle;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPerson2Person()
    {
        return $this->Person2Person;
    }

    /**
     * @param bool $Person2Person
     * @return UKMailOptions
     */
    public function withPerson2Person($Person2Person)
    {
        $new = clone $this;
        $new->Person2Person = $Person2Person;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBookIn()
    {
        return $this->BookIn;
    }

    /**
     * @param bool $BookIn
     * @return UKMailOptions
     */
    public function withBookIn($BookIn)
    {
        $new = clone $this;
        $new->BookIn = $BookIn;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLongLength()
    {
        return $this->LongLength;
    }

    /**
     * @param bool $LongLength
     * @return UKMailOptions
     */
    public function withLongLength($LongLength)
    {
        $new = clone $this;
        $new->LongLength = $LongLength;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSwapOut()
    {
        return $this->SwapOut;
    }

    /**
     * @param bool $SwapOut
     * @return UKMailOptions
     */
    public function withSwapOut($SwapOut)
    {
        $new = clone $this;
        $new->SwapOut = $SwapOut;

        return $new;
    }


}

