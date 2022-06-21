<?php

namespace Booni3\GFS\Type;

class Money
{

    /**
     * @var string
     */
    private $Currency;

    /**
     * @var float
     */
    private $Amount;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }

    /**
     * @param string $Currency
     * @return Money
     */
    public function withCurrency($Currency)
    {
        $new = clone $this;
        $new->Currency = $Currency;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->Amount;
    }

    /**
     * @param float $Amount
     * @return Money
     */
    public function withAmount($Amount)
    {
        $new = clone $this;
        $new->Amount = $Amount;

        return $new;
    }


}

