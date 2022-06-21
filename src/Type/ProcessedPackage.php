<?php

namespace Booni3\GFS\Type;

class ProcessedPackage
{

    /**
     * @var string
     */
    private $rtnConsignmentNo;

    /**
     * @var string
     */
    private $rtnParcelNo;

    /**
     * @var string
     */
    private $ItemNo;

    /**
     * @var string
     */
    private $ConsignmentNo;

    /**
     * @var int
     */
    private $SequenceID;

    /**
     * @var int
     */
    private $ItemID;

    /**
     * @var string
     */
    private $PackageNo;

    /**
     * @var \Booni3\GFS\Type\PrintDocument
     */
    private $Labels;

    /**
     * @var string
     */
    private $Origin;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $ParcelCost;

    /**
     * @var string
     */
    private $ClientName;

    /**
     * @var string
     */
    private $ChildName;

    /**
     * @var \Booni3\GFS\Type\LabelCarrier
     */
    private $LabelCarriers;

    /**
     * @var string
     */
    private $SenderLines;

    /**
     * @var string
     */
    private $DestLines;

    /**
     * @var string
     */
    private $Titles;

    /**
     * @var string
     */
    private $TitleValues;

    /**
     * @var string
     */
    private $ServiceLogos;

    /**
     * @var string
     */
    private $ServiceText;

    /**
     * @return string
     */
    public function getRtnConsignmentNo()
    {
        return $this->rtnConsignmentNo;
    }

    /**
     * @param string $rtnConsignmentNo
     * @return ProcessedPackage
     */
    public function withRtnConsignmentNo($rtnConsignmentNo)
    {
        $new = clone $this;
        $new->rtnConsignmentNo = $rtnConsignmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getRtnParcelNo()
    {
        return $this->rtnParcelNo;
    }

    /**
     * @param string $rtnParcelNo
     * @return ProcessedPackage
     */
    public function withRtnParcelNo($rtnParcelNo)
    {
        $new = clone $this;
        $new->rtnParcelNo = $rtnParcelNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->ItemNo;
    }

    /**
     * @param string $ItemNo
     * @return ProcessedPackage
     */
    public function withItemNo($ItemNo)
    {
        $new = clone $this;
        $new->ItemNo = $ItemNo;

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
     * @return ProcessedPackage
     */
    public function withConsignmentNo($ConsignmentNo)
    {
        $new = clone $this;
        $new->ConsignmentNo = $ConsignmentNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getSequenceID()
    {
        return $this->SequenceID;
    }

    /**
     * @param int $SequenceID
     * @return ProcessedPackage
     */
    public function withSequenceID($SequenceID)
    {
        $new = clone $this;
        $new->SequenceID = $SequenceID;

        return $new;
    }

    /**
     * @return int
     */
    public function getItemID()
    {
        return $this->ItemID;
    }

    /**
     * @param int $ItemID
     * @return ProcessedPackage
     */
    public function withItemID($ItemID)
    {
        $new = clone $this;
        $new->ItemID = $ItemID;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackageNo()
    {
        return $this->PackageNo;
    }

    /**
     * @param string $PackageNo
     * @return ProcessedPackage
     */
    public function withPackageNo($PackageNo)
    {
        $new = clone $this;
        $new->PackageNo = $PackageNo;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintDocument
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * @param \Booni3\GFS\Type\PrintDocument $Labels
     * @return ProcessedPackage
     */
    public function withLabels($Labels)
    {
        $new = clone $this;
        $new->Labels = $Labels;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->Origin;
    }

    /**
     * @param string $Origin
     * @return ProcessedPackage
     */
    public function withOrigin($Origin)
    {
        $new = clone $this;
        $new->Origin = $Origin;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getParcelCost()
    {
        return $this->ParcelCost;
    }

    /**
     * @param \Booni3\GFS\Type\Money $ParcelCost
     * @return ProcessedPackage
     */
    public function withParcelCost($ParcelCost)
    {
        $new = clone $this;
        $new->ParcelCost = $ParcelCost;

        return $new;
    }

    /**
     * @return string
     */
    public function getClientName()
    {
        return $this->ClientName;
    }

    /**
     * @param string $ClientName
     * @return ProcessedPackage
     */
    public function withClientName($ClientName)
    {
        $new = clone $this;
        $new->ClientName = $ClientName;

        return $new;
    }

    /**
     * @return string
     */
    public function getChildName()
    {
        return $this->ChildName;
    }

    /**
     * @param string $ChildName
     * @return ProcessedPackage
     */
    public function withChildName($ChildName)
    {
        $new = clone $this;
        $new->ChildName = $ChildName;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\LabelCarrier
     */
    public function getLabelCarriers()
    {
        return $this->LabelCarriers;
    }

    /**
     * @param \Booni3\GFS\Type\LabelCarrier $LabelCarriers
     * @return ProcessedPackage
     */
    public function withLabelCarriers($LabelCarriers)
    {
        $new = clone $this;
        $new->LabelCarriers = $LabelCarriers;

        return $new;
    }

    /**
     * @return string
     */
    public function getSenderLines()
    {
        return $this->SenderLines;
    }

    /**
     * @param string $SenderLines
     * @return ProcessedPackage
     */
    public function withSenderLines($SenderLines)
    {
        $new = clone $this;
        $new->SenderLines = $SenderLines;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestLines()
    {
        return $this->DestLines;
    }

    /**
     * @param string $DestLines
     * @return ProcessedPackage
     */
    public function withDestLines($DestLines)
    {
        $new = clone $this;
        $new->DestLines = $DestLines;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitles()
    {
        return $this->Titles;
    }

    /**
     * @param string $Titles
     * @return ProcessedPackage
     */
    public function withTitles($Titles)
    {
        $new = clone $this;
        $new->Titles = $Titles;

        return $new;
    }

    /**
     * @return string
     */
    public function getTitleValues()
    {
        return $this->TitleValues;
    }

    /**
     * @param string $TitleValues
     * @return ProcessedPackage
     */
    public function withTitleValues($TitleValues)
    {
        $new = clone $this;
        $new->TitleValues = $TitleValues;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceLogos()
    {
        return $this->ServiceLogos;
    }

    /**
     * @param string $ServiceLogos
     * @return ProcessedPackage
     */
    public function withServiceLogos($ServiceLogos)
    {
        $new = clone $this;
        $new->ServiceLogos = $ServiceLogos;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceText()
    {
        return $this->ServiceText;
    }

    /**
     * @param string $ServiceText
     * @return ProcessedPackage
     */
    public function withServiceText($ServiceText)
    {
        $new = clone $this;
        $new->ServiceText = $ServiceText;

        return $new;
    }


}

