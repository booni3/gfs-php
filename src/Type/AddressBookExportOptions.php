<?php

namespace Booni3\GFS\Type;

class AddressBookExportOptions
{

    /**
     * @var bool
     */
    private $UrbanCode;

    /**
     * @var bool
     */
    private $Tin;

    /**
     * @var bool
     */
    private $ContactInfo;

    /**
     * @var bool
     */
    private $PersonName;

    /**
     * @var bool
     */
    private $Company;

    /**
     * @var bool
     */
    private $Address;

    /**
     * @var bool
     */
    private $ShipmentReference;

    /**
     * @var bool
     */
    private $ConsigneeReference;

    /**
     * @var bool
     */
    private $AdditinalReferences;

    /**
     * @var bool
     */
    private $ConsigneeNotifications;

    /**
     * @return bool
     */
    public function getUrbanCode()
    {
        return $this->UrbanCode;
    }

    /**
     * @param bool $UrbanCode
     * @return AddressBookExportOptions
     */
    public function withUrbanCode($UrbanCode)
    {
        $new = clone $this;
        $new->UrbanCode = $UrbanCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTin()
    {
        return $this->Tin;
    }

    /**
     * @param bool $Tin
     * @return AddressBookExportOptions
     */
    public function withTin($Tin)
    {
        $new = clone $this;
        $new->Tin = $Tin;

        return $new;
    }

    /**
     * @return bool
     */
    public function getContactInfo()
    {
        return $this->ContactInfo;
    }

    /**
     * @param bool $ContactInfo
     * @return AddressBookExportOptions
     */
    public function withContactInfo($ContactInfo)
    {
        $new = clone $this;
        $new->ContactInfo = $ContactInfo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * @param bool $PersonName
     * @return AddressBookExportOptions
     */
    public function withPersonName($PersonName)
    {
        $new = clone $this;
        $new->PersonName = $PersonName;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * @param bool $Company
     * @return AddressBookExportOptions
     */
    public function withCompany($Company)
    {
        $new = clone $this;
        $new->Company = $Company;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param bool $Address
     * @return AddressBookExportOptions
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return bool
     */
    public function getShipmentReference()
    {
        return $this->ShipmentReference;
    }

    /**
     * @param bool $ShipmentReference
     * @return AddressBookExportOptions
     */
    public function withShipmentReference($ShipmentReference)
    {
        $new = clone $this;
        $new->ShipmentReference = $ShipmentReference;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConsigneeReference()
    {
        return $this->ConsigneeReference;
    }

    /**
     * @param bool $ConsigneeReference
     * @return AddressBookExportOptions
     */
    public function withConsigneeReference($ConsigneeReference)
    {
        $new = clone $this;
        $new->ConsigneeReference = $ConsigneeReference;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAdditinalReferences()
    {
        return $this->AdditinalReferences;
    }

    /**
     * @param bool $AdditinalReferences
     * @return AddressBookExportOptions
     */
    public function withAdditinalReferences($AdditinalReferences)
    {
        $new = clone $this;
        $new->AdditinalReferences = $AdditinalReferences;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConsigneeNotifications()
    {
        return $this->ConsigneeNotifications;
    }

    /**
     * @param bool $ConsigneeNotifications
     * @return AddressBookExportOptions
     */
    public function withConsigneeNotifications($ConsigneeNotifications)
    {
        $new = clone $this;
        $new->ConsigneeNotifications = $ConsigneeNotifications;

        return $new;
    }


}

