<?php

namespace Booni3\GFS\Type;

class CarrierDispatchRequest
{

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var \DateTimeInterface
     */
    private $ReadyDate;

    /**
     * @var string
     */
    private $CompanyCloseTime;

    /**
     * @var string
     */
    private $BuildingPartDescription;

    /**
     * @var string
     */
    private $BuildingLocationType;

    /**
     * @var string
     */
    private $BuildingPartCode;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $Recipient;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $ShipLocation;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $Shipper;

    /**
     * @var float
     */
    private $TotalWeight;

    /**
     * @var int
     */
    private $PackageCount;

    /**
     * @var int
     */
    private $OversizePackageCount;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ServiceCode;

    /**
     * @var \Booni3\GFS\Type\DispatchFreightDetails
     */
    private $FreightDetails;

    /**
     * @var string
     */
    private $CommodityDescription;

    /**
     * @var string
     */
    private $Instructions;

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
     * @return CarrierDispatchRequest
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getReadyDate()
    {
        return $this->ReadyDate;
    }

    /**
     * @param \DateTimeInterface $ReadyDate
     * @return CarrierDispatchRequest
     */
    public function withReadyDate($ReadyDate)
    {
        $new = clone $this;
        $new->ReadyDate = $ReadyDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getCompanyCloseTime()
    {
        return $this->CompanyCloseTime;
    }

    /**
     * @param string $CompanyCloseTime
     * @return CarrierDispatchRequest
     */
    public function withCompanyCloseTime($CompanyCloseTime)
    {
        $new = clone $this;
        $new->CompanyCloseTime = $CompanyCloseTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingPartDescription()
    {
        return $this->BuildingPartDescription;
    }

    /**
     * @param string $BuildingPartDescription
     * @return CarrierDispatchRequest
     */
    public function withBuildingPartDescription($BuildingPartDescription)
    {
        $new = clone $this;
        $new->BuildingPartDescription = $BuildingPartDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingLocationType()
    {
        return $this->BuildingLocationType;
    }

    /**
     * @param string $BuildingLocationType
     * @return CarrierDispatchRequest
     */
    public function withBuildingLocationType($BuildingLocationType)
    {
        $new = clone $this;
        $new->BuildingLocationType = $BuildingLocationType;

        return $new;
    }

    /**
     * @return string
     */
    public function getBuildingPartCode()
    {
        return $this->BuildingPartCode;
    }

    /**
     * @param string $BuildingPartCode
     * @return CarrierDispatchRequest
     */
    public function withBuildingPartCode($BuildingPartCode)
    {
        $new = clone $this;
        $new->BuildingPartCode = $BuildingPartCode;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param \Booni3\GFS\Type\Party $Recipient
     * @return CarrierDispatchRequest
     */
    public function withRecipient($Recipient)
    {
        $new = clone $this;
        $new->Recipient = $Recipient;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getShipLocation()
    {
        return $this->ShipLocation;
    }

    /**
     * @param \Booni3\GFS\Type\Party $ShipLocation
     * @return CarrierDispatchRequest
     */
    public function withShipLocation($ShipLocation)
    {
        $new = clone $this;
        $new->ShipLocation = $ShipLocation;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    /**
     * @param \Booni3\GFS\Type\Party $Shipper
     * @return CarrierDispatchRequest
     */
    public function withShipper($Shipper)
    {
        $new = clone $this;
        $new->Shipper = $Shipper;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }

    /**
     * @param float $TotalWeight
     * @return CarrierDispatchRequest
     */
    public function withTotalWeight($TotalWeight)
    {
        $new = clone $this;
        $new->TotalWeight = $TotalWeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }

    /**
     * @param int $PackageCount
     * @return CarrierDispatchRequest
     */
    public function withPackageCount($PackageCount)
    {
        $new = clone $this;
        $new->PackageCount = $PackageCount;

        return $new;
    }

    /**
     * @return int
     */
    public function getOversizePackageCount()
    {
        return $this->OversizePackageCount;
    }

    /**
     * @param int $OversizePackageCount
     * @return CarrierDispatchRequest
     */
    public function withOversizePackageCount($OversizePackageCount)
    {
        $new = clone $this;
        $new->OversizePackageCount = $OversizePackageCount;

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
     * @return CarrierDispatchRequest
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
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return CarrierDispatchRequest
     */
    public function withServiceCode($ServiceCode)
    {
        $new = clone $this;
        $new->ServiceCode = $ServiceCode;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DispatchFreightDetails
     */
    public function getFreightDetails()
    {
        return $this->FreightDetails;
    }

    /**
     * @param \Booni3\GFS\Type\DispatchFreightDetails $FreightDetails
     * @return CarrierDispatchRequest
     */
    public function withFreightDetails($FreightDetails)
    {
        $new = clone $this;
        $new->FreightDetails = $FreightDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getCommodityDescription()
    {
        return $this->CommodityDescription;
    }

    /**
     * @param string $CommodityDescription
     * @return CarrierDispatchRequest
     */
    public function withCommodityDescription($CommodityDescription)
    {
        $new = clone $this;
        $new->CommodityDescription = $CommodityDescription;

        return $new;
    }

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     * @return CarrierDispatchRequest
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

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
     * @return CarrierDispatchRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

