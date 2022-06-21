<?php

namespace Booni3\GFS\Type;

class Recipient
{

    /**
     * @var int
     */
    private $SequenceId;

    /**
     * @var int
     */
    private $SaveAB;

    /**
     * @var string
     */
    private $AdditionalRefrences;

    /**
     * @var string
     */
    private $ShipmentReference;

    /**
     * @var string
     */
    private $ConsigneeReference;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $AddressAndContact;

    /**
     * @var \Booni3\GFS\Type\ConsigneeNotifications
     */
    private $ConsigneeNotifications;

    /**
     * @return int
     */
    public function getSequenceId()
    {
        return $this->SequenceId;
    }

    /**
     * @param int $SequenceId
     * @return Recipient
     */
    public function withSequenceId($SequenceId)
    {
        $new = clone $this;
        $new->SequenceId = $SequenceId;

        return $new;
    }

    /**
     * @return int
     */
    public function getSaveAB()
    {
        return $this->SaveAB;
    }

    /**
     * @param int $SaveAB
     * @return Recipient
     */
    public function withSaveAB($SaveAB)
    {
        $new = clone $this;
        $new->SaveAB = $SaveAB;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdditionalRefrences()
    {
        return $this->AdditionalRefrences;
    }

    /**
     * @param string $AdditionalRefrences
     * @return Recipient
     */
    public function withAdditionalRefrences($AdditionalRefrences)
    {
        $new = clone $this;
        $new->AdditionalRefrences = $AdditionalRefrences;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentReference()
    {
        return $this->ShipmentReference;
    }

    /**
     * @param string $ShipmentReference
     * @return Recipient
     */
    public function withShipmentReference($ShipmentReference)
    {
        $new = clone $this;
        $new->ShipmentReference = $ShipmentReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsigneeReference()
    {
        return $this->ConsigneeReference;
    }

    /**
     * @param string $ConsigneeReference
     * @return Recipient
     */
    public function withConsigneeReference($ConsigneeReference)
    {
        $new = clone $this;
        $new->ConsigneeReference = $ConsigneeReference;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getAddressAndContact()
    {
        return $this->AddressAndContact;
    }

    /**
     * @param \Booni3\GFS\Type\Party $AddressAndContact
     * @return Recipient
     */
    public function withAddressAndContact($AddressAndContact)
    {
        $new = clone $this;
        $new->AddressAndContact = $AddressAndContact;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ConsigneeNotifications
     */
    public function getConsigneeNotifications()
    {
        return $this->ConsigneeNotifications;
    }

    /**
     * @param \Booni3\GFS\Type\ConsigneeNotifications $ConsigneeNotifications
     * @return Recipient
     */
    public function withConsigneeNotifications($ConsigneeNotifications)
    {
        $new = clone $this;
        $new->ConsigneeNotifications = $ConsigneeNotifications;

        return $new;
    }


}

