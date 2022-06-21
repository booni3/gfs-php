<?php

namespace Booni3\GFS\Type;

class Party
{

    /**
     * @var string
     */
    private $IOSS;

    /**
     * @var string
     */
    private $VAT;

    /**
     * @var string
     */
    private $EORI;

    /**
     * @var string
     */
    private $Company;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $ContactAddress;

    /**
     * @var \Booni3\GFS\Type\Person
     */
    private $ContactPerson;

    /**
     * @return string
     */
    public function getIOSS()
    {
        return $this->IOSS;
    }

    /**
     * @param string $IOSS
     * @return Party
     */
    public function withIOSS($IOSS)
    {
        $new = clone $this;
        $new->IOSS = $IOSS;

        return $new;
    }

    /**
     * @return string
     */
    public function getVAT()
    {
        return $this->VAT;
    }

    /**
     * @param string $VAT
     * @return Party
     */
    public function withVAT($VAT)
    {
        $new = clone $this;
        $new->VAT = $VAT;

        return $new;
    }

    /**
     * @return string
     */
    public function getEORI()
    {
        return $this->EORI;
    }

    /**
     * @param string $EORI
     * @return Party
     */
    public function withEORI($EORI)
    {
        $new = clone $this;
        $new->EORI = $EORI;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param string $Company
     * @return Party
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getContactAddress()
    {
        return $this->ContactAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $ContactAddress
     * @return Party
     */
    public function withContactAddress($ContactAddress)
    {
        $new = clone $this;
        $new->ContactAddress = $ContactAddress;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Person
     */
    public function getContactPerson()
    {
        return $this->ContactPerson;
    }

    /**
     * @param \Booni3\GFS\Type\Person $ContactPerson
     * @return Party
     */
    public function withContactPerson($ContactPerson)
    {
        $new = clone $this;
        $new->ContactPerson = $ContactPerson;

        return $new;
    }


}

