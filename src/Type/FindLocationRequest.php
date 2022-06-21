<?php

namespace Booni3\GFS\Type;

class FindLocationRequest
{

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $NearToPhone;

    /**
     * @var int
     */
    private $MaxMatchCount;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $NearToAddress;

    /**
     * @var string
     */
    private $LocationTypes;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $DroppoffInterval;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $SaturdayInterval;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return string
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return FindLocationRequest
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return FindLocationRequest
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getNearToPhone()
    {
        return $this->NearToPhone;
    }

    /**
     * @param string $NearToPhone
     * @return FindLocationRequest
     */
    public function withNearToPhone($NearToPhone)
    {
        $new = clone $this;
        $new->NearToPhone = $NearToPhone;

        return $new;
    }

    /**
     * @return int
     */
    public function getMaxMatchCount()
    {
        return $this->MaxMatchCount;
    }

    /**
     * @param int $MaxMatchCount
     * @return FindLocationRequest
     */
    public function withMaxMatchCount($MaxMatchCount)
    {
        $new = clone $this;
        $new->MaxMatchCount = $MaxMatchCount;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getNearToAddress()
    {
        return $this->NearToAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $NearToAddress
     * @return FindLocationRequest
     */
    public function withNearToAddress($NearToAddress)
    {
        $new = clone $this;
        $new->NearToAddress = $NearToAddress;

        return $new;
    }

    /**
     * @return string
     */
    public function getLocationTypes()
    {
        return $this->LocationTypes;
    }

    /**
     * @param string $LocationTypes
     * @return FindLocationRequest
     */
    public function withLocationTypes($LocationTypes)
    {
        $new = clone $this;
        $new->LocationTypes = $LocationTypes;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getDroppoffInterval()
    {
        return $this->DroppoffInterval;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $DroppoffInterval
     * @return FindLocationRequest
     */
    public function withDroppoffInterval($DroppoffInterval)
    {
        $new = clone $this;
        $new->DroppoffInterval = $DroppoffInterval;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getSaturdayInterval()
    {
        return $this->SaturdayInterval;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $SaturdayInterval
     * @return FindLocationRequest
     */
    public function withSaturdayInterval($SaturdayInterval)
    {
        $new = clone $this;
        $new->SaturdayInterval = $SaturdayInterval;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return FindLocationRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

