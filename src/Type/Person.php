<?php

namespace Booni3\GFS\Type;

class Person
{

    /**
     * @var string
     */
    private $PersonName;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @var string
     */
    private $Fax;

    /**
     * @var string
     */
    private $Mobile;

    /**
     * @var string
     */
    private $E_Mail;

    /**
     * @var \Booni3\GFS\Type\Tin
     */
    private $PersonTin;

    /**
     * @return string
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * @param string $PersonName
     * @return Person
     */
    public function withPersonName($PersonName)
    {
        $new = clone $this;
        $new->PersonName = $PersonName;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return Person
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->Fax;
    }

    /**
     * @param string $Fax
     * @return Person
     */
    public function withFax($Fax)
    {
        $new = clone $this;
        $new->Fax = $Fax;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobile()
    {
        return $this->Mobile;
    }

    /**
     * @param string $Mobile
     * @return Person
     */
    public function withMobile($Mobile)
    {
        $new = clone $this;
        $new->Mobile = $Mobile;

        return $new;
    }

    /**
     * @return string
     */
    public function getE_Mail()
    {
        return $this->E_Mail;
    }

    /**
     * @param string $E_Mail
     * @return Person
     */
    public function withE_Mail($E_Mail)
    {
        $new = clone $this;
        $new->E_Mail = $E_Mail;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Tin
     */
    public function getPersonTin()
    {
        return $this->PersonTin;
    }

    /**
     * @param \Booni3\GFS\Type\Tin $PersonTin
     * @return Person
     */
    public function withPersonTin($PersonTin)
    {
        $new = clone $this;
        $new->PersonTin = $PersonTin;

        return $new;
    }


}

