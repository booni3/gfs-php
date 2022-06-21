<?php

namespace Booni3\GFS\Type;

class CODDetails
{

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $CODAmount;

    /**
     * @var string
     */
    private $PayType;

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getCODAmount()
    {
        return $this->CODAmount;
    }

    /**
     * @param \Booni3\GFS\Type\Money $CODAmount
     * @return CODDetails
     */
    public function withCODAmount($CODAmount)
    {
        $new = clone $this;
        $new->CODAmount = $CODAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getPayType()
    {
        return $this->PayType;
    }

    /**
     * @param string $PayType
     * @return CODDetails
     */
    public function withPayType($PayType)
    {
        $new = clone $this;
        $new->PayType = $PayType;

        return $new;
    }


}

