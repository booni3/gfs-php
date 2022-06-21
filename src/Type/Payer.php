<?php

namespace Booni3\GFS\Type;

class Payer
{

    /**
     * @var string
     */
    private $PayerAccount;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * @return string
     */
    public function getPayerAccount()
    {
        return $this->PayerAccount;
    }

    /**
     * @param string $PayerAccount
     * @return Payer
     */
    public function withPayerAccount($PayerAccount)
    {
        $new = clone $this;
        $new->PayerAccount = $PayerAccount;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return Payer
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }


}

