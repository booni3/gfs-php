<?php

namespace Booni3\GFS\Type;

class RequestedShipmentDetails
{

    /**
     * @var \Booni3\GFS\Type\AramexOptions
     */
    private $AramexOptions;

    /**
     * @var \Booni3\GFS\Type\IrregularShipDetails
     */
    private $IrregularDetails;

    /**
     * @var \Booni3\GFS\Type\PantherOptions
     */
    private $pantherOptions;

    /**
     * @var \Booni3\GFS\Type\PalletForceOptions
     */
    private $palletForceOptions;

    /**
     * @var string
     */
    private $ChannelIdent;

    /**
     * @var string
     */
    private $ParcelID;

    /**
     * @var bool
     */
    private $Liquids;

    /**
     * @var string
     */
    private $GoodsTypeDescription;

    /**
     * @var \Booni3\GFS\Type\ExpertDetails
     */
    private $ExpertNode;

    /**
     * @var bool
     */
    private $CarbonNeutral;

    /**
     * @var int
     */
    private $ShipperId;

    /**
     * @var \Booni3\GFS\Type\UKMailOptions
     */
    private $UKMOptions;

    /**
     * @var \Booni3\GFS\Type\CAShipDetails
     */
    private $caDetails;

    /**
     * @var string
     */
    private $ResponsiblePerson;

    /**
     * @var string
     */
    private $DepartmentCode;

    /**
     * @var bool
     */
    private $SaturdayDeliv;

    /**
     * @var bool
     */
    private $SaveNotValid;

    /**
     * @var \DateTimeInterface
     */
    private $DespatchDate;

    /**
     * @var \Booni3\GFS\Type\CarrierService
     */
    private $CarrierService;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $Shipper;

    /**
     * @var \Booni3\GFS\Type\RequestedPackage
     */
    private $Packages;

    /**
     * @var bool
     */
    private $ConsolidateShipment;

    /**
     * @var \Booni3\GFS\Type\ReturnDetails
     */
    private $ReturnDetails;

    /**
     * @var \Booni3\GFS\Type\HoldAtLocationDetails
     */
    private $HoldAtLocationDetails;

    /**
     * @var \Booni3\GFS\Type\CustomsDetails
     */
    private $CustomsDetails;

    /**
     * @var \Booni3\GFS\Type\SignatureDetails
     */
    private $SignatureDetails;

    /**
     * @var \Booni3\GFS\Type\RefrigDetails
     */
    private $RefrigDetails;

    /**
     * @var \Booni3\GFS\Type\FreightDetails
     */
    private $FreightDetails;

    /**
     * @var \Booni3\GFS\Type\ExWorksDetails
     */
    private $ExWorksDetails;

    /**
     * @var \Booni3\GFS\Type\CODDetails
     */
    private $CODDetails;

    /**
     * @var \Booni3\GFS\Type\DeliverySlotDetails
     */
    private $DeliverySlotDetails;

    /**
     * @var \Booni3\GFS\Type\DangerousDetails
     */
    private $HazardDetails;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $Cost;

    /**
     * @var string
     */
    private $Instructions;

    /**
     * @var string
     */
    private $Content;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $Insurance;

    /**
     * @var float
     */
    private $TotalWeight;

    /**
     * @var int
     */
    private $Packs;

    /**
     * @var string
     */
    private $ShipmentSpecialTypes;

    /**
     * @var int
     */
    private $ShipmentID;

    /**
     * @return \Booni3\GFS\Type\AramexOptions
     */
    public function getAramexOptions()
    {
        return $this->AramexOptions;
    }

    /**
     * @param \Booni3\GFS\Type\AramexOptions $AramexOptions
     * @return RequestedShipmentDetails
     */
    public function withAramexOptions($AramexOptions)
    {
        $new = clone $this;
        $new->AramexOptions = $AramexOptions;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\IrregularShipDetails
     */
    public function getIrregularDetails()
    {
        return $this->IrregularDetails;
    }

    /**
     * @param \Booni3\GFS\Type\IrregularShipDetails $IrregularDetails
     * @return RequestedShipmentDetails
     */
    public function withIrregularDetails($IrregularDetails)
    {
        $new = clone $this;
        $new->IrregularDetails = $IrregularDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PantherOptions
     */
    public function getPantherOptions()
    {
        return $this->pantherOptions;
    }

    /**
     * @param \Booni3\GFS\Type\PantherOptions $pantherOptions
     * @return RequestedShipmentDetails
     */
    public function withPantherOptions($pantherOptions)
    {
        $new = clone $this;
        $new->pantherOptions = $pantherOptions;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PalletForceOptions
     */
    public function getPalletForceOptions()
    {
        return $this->palletForceOptions;
    }

    /**
     * @param \Booni3\GFS\Type\PalletForceOptions $palletForceOptions
     * @return RequestedShipmentDetails
     */
    public function withPalletForceOptions($palletForceOptions)
    {
        $new = clone $this;
        $new->palletForceOptions = $palletForceOptions;

        return $new;
    }

    /**
     * @return string
     */
    public function getChannelIdent()
    {
        return $this->ChannelIdent;
    }

    /**
     * @param string $ChannelIdent
     * @return RequestedShipmentDetails
     */
    public function withChannelIdent($ChannelIdent)
    {
        $new = clone $this;
        $new->ChannelIdent = $ChannelIdent;

        return $new;
    }

    /**
     * @return string
     */
    public function getParcelID()
    {
        return $this->ParcelID;
    }

    /**
     * @param string $ParcelID
     * @return RequestedShipmentDetails
     */
    public function withParcelID($ParcelID)
    {
        $new = clone $this;
        $new->ParcelID = $ParcelID;

        return $new;
    }

    /**
     * @return bool
     */
    public function getLiquids()
    {
        return $this->Liquids;
    }

    /**
     * @param bool $Liquids
     * @return RequestedShipmentDetails
     */
    public function withLiquids($Liquids)
    {
        $new = clone $this;
        $new->Liquids = $Liquids;

        return $new;
    }

    /**
     * @return string
     */
    public function getGoodsTypeDescription()
    {
        return $this->GoodsTypeDescription;
    }

    /**
     * @param string $GoodsTypeDescription
     * @return RequestedShipmentDetails
     */
    public function withGoodsTypeDescription($GoodsTypeDescription)
    {
        $new = clone $this;
        $new->GoodsTypeDescription = $GoodsTypeDescription;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ExpertDetails
     */
    public function getExpertNode()
    {
        return $this->ExpertNode;
    }

    /**
     * @param \Booni3\GFS\Type\ExpertDetails $ExpertNode
     * @return RequestedShipmentDetails
     */
    public function withExpertNode($ExpertNode)
    {
        $new = clone $this;
        $new->ExpertNode = $ExpertNode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCarbonNeutral()
    {
        return $this->CarbonNeutral;
    }

    /**
     * @param bool $CarbonNeutral
     * @return RequestedShipmentDetails
     */
    public function withCarbonNeutral($CarbonNeutral)
    {
        $new = clone $this;
        $new->CarbonNeutral = $CarbonNeutral;

        return $new;
    }

    /**
     * @return int
     */
    public function getShipperId()
    {
        return $this->ShipperId;
    }

    /**
     * @param int $ShipperId
     * @return RequestedShipmentDetails
     */
    public function withShipperId($ShipperId)
    {
        $new = clone $this;
        $new->ShipperId = $ShipperId;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\UKMailOptions
     */
    public function getUKMOptions()
    {
        return $this->UKMOptions;
    }

    /**
     * @param \Booni3\GFS\Type\UKMailOptions $UKMOptions
     * @return RequestedShipmentDetails
     */
    public function withUKMOptions($UKMOptions)
    {
        $new = clone $this;
        $new->UKMOptions = $UKMOptions;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CAShipDetails
     */
    public function getCaDetails()
    {
        return $this->caDetails;
    }

    /**
     * @param \Booni3\GFS\Type\CAShipDetails $caDetails
     * @return RequestedShipmentDetails
     */
    public function withCaDetails($caDetails)
    {
        $new = clone $this;
        $new->caDetails = $caDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getResponsiblePerson()
    {
        return $this->ResponsiblePerson;
    }

    /**
     * @param string $ResponsiblePerson
     * @return RequestedShipmentDetails
     */
    public function withResponsiblePerson($ResponsiblePerson)
    {
        $new = clone $this;
        $new->ResponsiblePerson = $ResponsiblePerson;

        return $new;
    }

    /**
     * @return string
     */
    public function getDepartmentCode()
    {
        return $this->DepartmentCode;
    }

    /**
     * @param string $DepartmentCode
     * @return RequestedShipmentDetails
     */
    public function withDepartmentCode($DepartmentCode)
    {
        $new = clone $this;
        $new->DepartmentCode = $DepartmentCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaturdayDeliv()
    {
        return $this->SaturdayDeliv;
    }

    /**
     * @param bool $SaturdayDeliv
     * @return RequestedShipmentDetails
     */
    public function withSaturdayDeliv($SaturdayDeliv)
    {
        $new = clone $this;
        $new->SaturdayDeliv = $SaturdayDeliv;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaveNotValid()
    {
        return $this->SaveNotValid;
    }

    /**
     * @param bool $SaveNotValid
     * @return RequestedShipmentDetails
     */
    public function withSaveNotValid($SaveNotValid)
    {
        $new = clone $this;
        $new->SaveNotValid = $SaveNotValid;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDespatchDate()
    {
        return $this->DespatchDate;
    }

    /**
     * @param \DateTimeInterface $DespatchDate
     * @return RequestedShipmentDetails
     */
    public function withDespatchDate($DespatchDate)
    {
        $new = clone $this;
        $new->DespatchDate = $DespatchDate;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierService
     */
    public function getCarrierService()
    {
        return $this->CarrierService;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierService $CarrierService
     * @return RequestedShipmentDetails
     */
    public function withCarrierService($CarrierService)
    {
        $new = clone $this;
        $new->CarrierService = $CarrierService;

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
     * @return RequestedShipmentDetails
     */
    public function withShipper($Shipper)
    {
        $new = clone $this;
        $new->Shipper = $Shipper;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedPackage
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedPackage $Packages
     * @return RequestedShipmentDetails
     */
    public function withPackages($Packages)
    {
        $new = clone $this;
        $new->Packages = $Packages;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConsolidateShipment()
    {
        return $this->ConsolidateShipment;
    }

    /**
     * @param bool $ConsolidateShipment
     * @return RequestedShipmentDetails
     */
    public function withConsolidateShipment($ConsolidateShipment)
    {
        $new = clone $this;
        $new->ConsolidateShipment = $ConsolidateShipment;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ReturnDetails
     */
    public function getReturnDetails()
    {
        return $this->ReturnDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ReturnDetails $ReturnDetails
     * @return RequestedShipmentDetails
     */
    public function withReturnDetails($ReturnDetails)
    {
        $new = clone $this;
        $new->ReturnDetails = $ReturnDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\HoldAtLocationDetails
     */
    public function getHoldAtLocationDetails()
    {
        return $this->HoldAtLocationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\HoldAtLocationDetails $HoldAtLocationDetails
     * @return RequestedShipmentDetails
     */
    public function withHoldAtLocationDetails($HoldAtLocationDetails)
    {
        $new = clone $this;
        $new->HoldAtLocationDetails = $HoldAtLocationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CustomsDetails
     */
    public function getCustomsDetails()
    {
        return $this->CustomsDetails;
    }

    /**
     * @param \Booni3\GFS\Type\CustomsDetails $CustomsDetails
     * @return RequestedShipmentDetails
     */
    public function withCustomsDetails($CustomsDetails)
    {
        $new = clone $this;
        $new->CustomsDetails = $CustomsDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\SignatureDetails
     */
    public function getSignatureDetails()
    {
        return $this->SignatureDetails;
    }

    /**
     * @param \Booni3\GFS\Type\SignatureDetails $SignatureDetails
     * @return RequestedShipmentDetails
     */
    public function withSignatureDetails($SignatureDetails)
    {
        $new = clone $this;
        $new->SignatureDetails = $SignatureDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RefrigDetails
     */
    public function getRefrigDetails()
    {
        return $this->RefrigDetails;
    }

    /**
     * @param \Booni3\GFS\Type\RefrigDetails $RefrigDetails
     * @return RequestedShipmentDetails
     */
    public function withRefrigDetails($RefrigDetails)
    {
        $new = clone $this;
        $new->RefrigDetails = $RefrigDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\FreightDetails
     */
    public function getFreightDetails()
    {
        return $this->FreightDetails;
    }

    /**
     * @param \Booni3\GFS\Type\FreightDetails $FreightDetails
     * @return RequestedShipmentDetails
     */
    public function withFreightDetails($FreightDetails)
    {
        $new = clone $this;
        $new->FreightDetails = $FreightDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ExWorksDetails
     */
    public function getExWorksDetails()
    {
        return $this->ExWorksDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ExWorksDetails $ExWorksDetails
     * @return RequestedShipmentDetails
     */
    public function withExWorksDetails($ExWorksDetails)
    {
        $new = clone $this;
        $new->ExWorksDetails = $ExWorksDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CODDetails
     */
    public function getCODDetails()
    {
        return $this->CODDetails;
    }

    /**
     * @param \Booni3\GFS\Type\CODDetails $CODDetails
     * @return RequestedShipmentDetails
     */
    public function withCODDetails($CODDetails)
    {
        $new = clone $this;
        $new->CODDetails = $CODDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DeliverySlotDetails
     */
    public function getDeliverySlotDetails()
    {
        return $this->DeliverySlotDetails;
    }

    /**
     * @param \Booni3\GFS\Type\DeliverySlotDetails $DeliverySlotDetails
     * @return RequestedShipmentDetails
     */
    public function withDeliverySlotDetails($DeliverySlotDetails)
    {
        $new = clone $this;
        $new->DeliverySlotDetails = $DeliverySlotDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DangerousDetails
     */
    public function getHazardDetails()
    {
        return $this->HazardDetails;
    }

    /**
     * @param \Booni3\GFS\Type\DangerousDetails $HazardDetails
     * @return RequestedShipmentDetails
     */
    public function withHazardDetails($HazardDetails)
    {
        $new = clone $this;
        $new->HazardDetails = $HazardDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getCost()
    {
        return $this->Cost;
    }

    /**
     * @param \Booni3\GFS\Type\Money $Cost
     * @return RequestedShipmentDetails
     */
    public function withCost($Cost)
    {
        $new = clone $this;
        $new->Cost = $Cost;

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
     * @return RequestedShipmentDetails
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param string $Content
     * @return RequestedShipmentDetails
     */
    public function withContent($Content)
    {
        $new = clone $this;
        $new->Content = $Content;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getInsurance()
    {
        return $this->Insurance;
    }

    /**
     * @param \Booni3\GFS\Type\Money $Insurance
     * @return RequestedShipmentDetails
     */
    public function withInsurance($Insurance)
    {
        $new = clone $this;
        $new->Insurance = $Insurance;

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
     * @return RequestedShipmentDetails
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
    public function getPacks()
    {
        return $this->Packs;
    }

    /**
     * @param int $Packs
     * @return RequestedShipmentDetails
     */
    public function withPacks($Packs)
    {
        $new = clone $this;
        $new->Packs = $Packs;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentSpecialTypes()
    {
        return $this->ShipmentSpecialTypes;
    }

    /**
     * @param string $ShipmentSpecialTypes
     * @return RequestedShipmentDetails
     */
    public function withShipmentSpecialTypes($ShipmentSpecialTypes)
    {
        $new = clone $this;
        $new->ShipmentSpecialTypes = $ShipmentSpecialTypes;

        return $new;
    }

    /**
     * @return int
     */
    public function getShipmentID()
    {
        return $this->ShipmentID;
    }

    /**
     * @param int $ShipmentID
     * @return RequestedShipmentDetails
     */
    public function withShipmentID($ShipmentID)
    {
        $new = clone $this;
        $new->ShipmentID = $ShipmentID;

        return $new;
    }


}

