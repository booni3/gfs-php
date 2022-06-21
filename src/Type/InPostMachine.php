<?php

namespace Booni3\GFS\Type;

class InPostMachine
{

    /**
     * @var string
     */
    private $MachineID;

    /**
     * @var string
     */
    private $BuildNumber;

    /**
     * @var string
     */
    private $FlatNumber;

    /**
     * @var string
     */
    private $Street;

    /**
     * @var string
     */
    private $County;

    /**
     * @var string
     */
    private $Town;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $Latitude;

    /**
     * @var string
     */
    private $Longitude;

    /**
     * @var string
     */
    private $Location;

    /**
     * @var bool
     */
    private $Payment;

    /**
     * @return string
     */
    public function getMachineID()
    {
        return $this->MachineID;
    }

    /**
     * @param string $MachineID
     * @return InPostMachine
     */
    public function withMachineID($MachineID)
    {
        $new = clone $this;
        $new->MachineID = $MachineID;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildNumber()
    {
        return $this->BuildNumber;
    }

    /**
     * @param string $BuildNumber
     * @return InPostMachine
     */
    public function withBuildNumber($BuildNumber)
    {
        $new = clone $this;
        $new->BuildNumber = $BuildNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getFlatNumber()
    {
        return $this->FlatNumber;
    }

    /**
     * @param string $FlatNumber
     * @return InPostMachine
     */
    public function withFlatNumber($FlatNumber)
    {
        $new = clone $this;
        $new->FlatNumber = $FlatNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->Street;
    }

    /**
     * @param string $Street
     * @return InPostMachine
     */
    public function withStreet($Street)
    {
        $new = clone $this;
        $new->Street = $Street;

        return $new;
    }

    /**
     * @return string
     */
    public function getCounty()
    {
        return $this->County;
    }

    /**
     * @param string $County
     * @return InPostMachine
     */
    public function withCounty($County)
    {
        $new = clone $this;
        $new->County = $County;

        return $new;
    }

    /**
     * @return string
     */
    public function getTown()
    {
        return $this->Town;
    }

    /**
     * @param string $Town
     * @return InPostMachine
     */
    public function withTown($Town)
    {
        $new = clone $this;
        $new->Town = $Town;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return InPostMachine
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

        return $new;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return InPostMachine
     */
    public function withLatitude($Latitude)
    {
        $new = clone $this;
        $new->Latitude = $Latitude;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return InPostMachine
     */
    public function withLongitude($Longitude)
    {
        $new = clone $this;
        $new->Longitude = $Longitude;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     * @return InPostMachine
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPayment()
    {
        return $this->Payment;
    }

    /**
     * @param bool $Payment
     * @return InPostMachine
     */
    public function withPayment($Payment)
    {
        $new = clone $this;
        $new->Payment = $Payment;

        return $new;
    }


}

