<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedShipment implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipReply
     */
    private $ProcessShipmentResult;

    /**
     * @var \Booni3\GFS\Type\PrintDocument
     */
    private $SpringLabels;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $PickupWindow;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $DeliveryWindow;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $CarrierCharge;

    /**
     * @var \Booni3\GFS\Type\CarrierService
     */
    private $CarrService;

    /**
     * @var \Booni3\GFS\Type\ShipCharges
     */
    private $Charges;

    /**
     * @var bool
     */
    private $Consolidated;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ShipmentStatus;

    /**
     * @var \Booni3\GFS\Type\ProcessedPackage
     */
    private $Packages;

    /**
     * @var \Booni3\GFS\Type\PrintDocument
     */
    private $PrintDocuments;

    /**
     * @var int
     */
    private $ShipmentID;

    /**
     * @var string
     */
    private $ReturnConsignmentNo;

    /**
     * @var string
     */
    private $ConsignmentNo2;

    /**
     * @var string
     */
    private $ConsignmentNo;

    /**
     * @return \Booni3\GFS\Type\ShipReply
     */
    public function getProcessShipmentResult()
    {
        return $this->ProcessShipmentResult;
    }

    /**
     * @param \Booni3\GFS\Type\ShipReply $ProcessShipmentResult
     * @return ProcessedShipment
     */
    public function withProcessShipmentResult($ProcessShipmentResult)
    {
        $new = clone $this;
        $new->ProcessShipmentResult = $ProcessShipmentResult;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintDocument
     */
    public function getSpringLabels()
    {
        return $this->SpringLabels;
    }

    /**
     * @param \Booni3\GFS\Type\PrintDocument $SpringLabels
     * @return ProcessedShipment
     */
    public function withSpringLabels($SpringLabels)
    {
        $new = clone $this;
        $new->SpringLabels = $SpringLabels;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getPickupWindow()
    {
        return $this->PickupWindow;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $PickupWindow
     * @return ProcessedShipment
     */
    public function withPickupWindow($PickupWindow)
    {
        $new = clone $this;
        $new->PickupWindow = $PickupWindow;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getDeliveryWindow()
    {
        return $this->DeliveryWindow;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $DeliveryWindow
     * @return ProcessedShipment
     */
    public function withDeliveryWindow($DeliveryWindow)
    {
        $new = clone $this;
        $new->DeliveryWindow = $DeliveryWindow;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getCarrierCharge()
    {
        return $this->CarrierCharge;
    }

    /**
     * @param \Booni3\GFS\Type\Money $CarrierCharge
     * @return ProcessedShipment
     */
    public function withCarrierCharge($CarrierCharge)
    {
        $new = clone $this;
        $new->CarrierCharge = $CarrierCharge;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierService
     */
    public function getCarrService()
    {
        return $this->CarrService;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierService $CarrService
     * @return ProcessedShipment
     */
    public function withCarrService($CarrService)
    {
        $new = clone $this;
        $new->CarrService = $CarrService;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ShipCharges
     */
    public function getCharges()
    {
        return $this->Charges;
    }

    /**
     * @param \Booni3\GFS\Type\ShipCharges $Charges
     * @return ProcessedShipment
     */
    public function withCharges($Charges)
    {
        $new = clone $this;
        $new->Charges = $Charges;

        return $new;
    }

    /**
     * @return bool
     */
    public function getConsolidated()
    {
        return $this->Consolidated;
    }

    /**
     * @param bool $Consolidated
     * @return ProcessedShipment
     */
    public function withConsolidated($Consolidated)
    {
        $new = clone $this;
        $new->Consolidated = $Consolidated;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getShipmentStatus()
    {
        return $this->ShipmentStatus;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $ShipmentStatus
     * @return ProcessedShipment
     */
    public function withShipmentStatus($ShipmentStatus)
    {
        $new = clone $this;
        $new->ShipmentStatus = $ShipmentStatus;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ProcessedPackage
     */
    public function getPackages()
    {
        return $this->Packages;
    }

    /**
     * @param \Booni3\GFS\Type\ProcessedPackage $Packages
     * @return ProcessedShipment
     */
    public function withPackages($Packages)
    {
        $new = clone $this;
        $new->Packages = $Packages;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintDocument
     */
    public function getPrintDocuments()
    {
        return $this->PrintDocuments;
    }

    /**
     * @param \Booni3\GFS\Type\PrintDocument $PrintDocuments
     * @return ProcessedShipment
     */
    public function withPrintDocuments($PrintDocuments)
    {
        $new = clone $this;
        $new->PrintDocuments = $PrintDocuments;

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
     * @return ProcessedShipment
     */
    public function withShipmentID($ShipmentID)
    {
        $new = clone $this;
        $new->ShipmentID = $ShipmentID;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnConsignmentNo()
    {
        return $this->ReturnConsignmentNo;
    }

    /**
     * @param string $ReturnConsignmentNo
     * @return ProcessedShipment
     */
    public function withReturnConsignmentNo($ReturnConsignmentNo)
    {
        $new = clone $this;
        $new->ReturnConsignmentNo = $ReturnConsignmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsignmentNo2()
    {
        return $this->ConsignmentNo2;
    }

    /**
     * @param string $ConsignmentNo2
     * @return ProcessedShipment
     */
    public function withConsignmentNo2($ConsignmentNo2)
    {
        $new = clone $this;
        $new->ConsignmentNo2 = $ConsignmentNo2;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
        return $this->ConsignmentNo;
    }

    /**
     * @param string $ConsignmentNo
     * @return ProcessedShipment
     */
    public function withConsignmentNo($ConsignmentNo)
    {
        $new = clone $this;
        $new->ConsignmentNo = $ConsignmentNo;

        return $new;
    }


}

