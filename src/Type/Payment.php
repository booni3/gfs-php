<?php

namespace Booni3\GFS\Type;

class Payment
{

    /**
     * @var string
     */
    private $PaymentType;

    /**
     * @var string
     */
    private $PayerCurrency;

    /**
     * @var \Booni3\GFS\Type\Payer
     */
    private $Payer;

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }

    /**
     * @param string $PaymentType
     * @return Payment
     */
    public function withPaymentType($PaymentType)
    {
        $new = clone $this;
        $new->PaymentType = $PaymentType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPayerCurrency()
    {
        return $this->PayerCurrency;
    }

    /**
     * @param string $PayerCurrency
     * @return Payment
     */
    public function withPayerCurrency($PayerCurrency)
    {
        $new = clone $this;
        $new->PayerCurrency = $PayerCurrency;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Payer
     */
    public function getPayer()
    {
        return $this->Payer;
    }

    /**
     * @param \Booni3\GFS\Type\Payer $Payer
     * @return Payment
     */
    public function withPayer($Payer)
    {
        $new = clone $this;
        $new->Payer = $Payer;

        return $new;
    }


}

