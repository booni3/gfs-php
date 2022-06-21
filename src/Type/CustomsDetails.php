<?php

namespace Booni3\GFS\Type;

class CustomsDetails
{

    /**
     * @var bool
     */
    private $Proforma;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $PostalCharges;

    /**
     * @var string
     */
    private $ExportCountry;

    /**
     * @var string
     */
    private $DestCountry;

    /**
     * @var string
     */
    private $NoOfPackages;

    /**
     * @var string
     */
    private $TotalPackages;

    /**
     * @var string
     */
    private $Category;

    /**
     * @var bool
     */
    private $PLT;

    /**
     * @var string
     */
    private $OtherChargesDesc;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $OtherCharges;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $Discount;

    /**
     * @var string
     */
    private $FDA;

    /**
     * @var bool
     */
    private $DocOnly;

    /**
     * @var string
     */
    private $Admissibility;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $InsuranceCharge;

    /**
     * @var \Booni3\GFS\Type\ShipDocument
     */
    private $ShipDocuments;

    /**
     * @var \Booni3\GFS\Type\Commodity
     */
    private $Commodities;

    /**
     * @var string
     */
    private $TermsOfSale;

    /**
     * @var string
     */
    private $Purpose;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $TaxesCharge;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $FreightCharge;

    /**
     * @var string
     */
    private $Comments;

    /**
     * @var bool
     */
    private $Nafta;

    /**
     * @var bool
     */
    private $Food;

    /**
     * @var bool
     */
    private $EurCirculation;

    /**
     * @var string
     */
    private $RecipientType;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $Importer;

    /**
     * @var \Booni3\GFS\Type\Payment
     */
    private $DutiesPayment;

    /**
     * @var \Booni3\GFS\Type\ClearanceBroker
     */
    private $ClearanceBroker;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $CustomsAmount;

    /**
     * @var string
     */
    private $CustomsNumber;

    /**
     * @var string
     */
    private $CustomsReference;

    /**
     * @var string
     */
    private $CountryOfManufacture;

    /**
     * @var string
     */
    private $CustomsInvoice;

    /**
     * @var \DateTimeInterface
     */
    private $CustomsInvoiceDate;

    /**
     * @return bool
     */
    public function getProforma()
    {
        return $this->Proforma;
    }

    /**
     * @param bool $Proforma
     * @return CustomsDetails
     */
    public function withProforma($Proforma)
    {
        $new = clone $this;
        $new->Proforma = $Proforma;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getPostalCharges()
    {
        return $this->PostalCharges;
    }

    /**
     * @param \Booni3\GFS\Type\Money $PostalCharges
     * @return CustomsDetails
     */
    public function withPostalCharges($PostalCharges)
    {
        $new = clone $this;
        $new->PostalCharges = $PostalCharges;

        return $new;
    }

    /**
     * @return string
     */
    public function getExportCountry()
    {
        return $this->ExportCountry;
    }

    /**
     * @param string $ExportCountry
     * @return CustomsDetails
     */
    public function withExportCountry($ExportCountry)
    {
        $new = clone $this;
        $new->ExportCountry = $ExportCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getDestCountry()
    {
        return $this->DestCountry;
    }

    /**
     * @param string $DestCountry
     * @return CustomsDetails
     */
    public function withDestCountry($DestCountry)
    {
        $new = clone $this;
        $new->DestCountry = $DestCountry;

        return $new;
    }

    /**
     * @return string
     */
    public function getNoOfPackages()
    {
        return $this->NoOfPackages;
    }

    /**
     * @param string $NoOfPackages
     * @return CustomsDetails
     */
    public function withNoOfPackages($NoOfPackages)
    {
        $new = clone $this;
        $new->NoOfPackages = $NoOfPackages;

        return $new;
    }

    /**
     * @return string
     */
    public function getTotalPackages()
    {
        return $this->TotalPackages;
    }

    /**
     * @param string $TotalPackages
     * @return CustomsDetails
     */
    public function withTotalPackages($TotalPackages)
    {
        $new = clone $this;
        $new->TotalPackages = $TotalPackages;

        return $new;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->Category;
    }

    /**
     * @param string $Category
     * @return CustomsDetails
     */
    public function withCategory($Category)
    {
        $new = clone $this;
        $new->Category = $Category;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPLT()
    {
        return $this->PLT;
    }

    /**
     * @param bool $PLT
     * @return CustomsDetails
     */
    public function withPLT($PLT)
    {
        $new = clone $this;
        $new->PLT = $PLT;

        return $new;
    }

    /**
     * @return string
     */
    public function getOtherChargesDesc()
    {
        return $this->OtherChargesDesc;
    }

    /**
     * @param string $OtherChargesDesc
     * @return CustomsDetails
     */
    public function withOtherChargesDesc($OtherChargesDesc)
    {
        $new = clone $this;
        $new->OtherChargesDesc = $OtherChargesDesc;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getOtherCharges()
    {
        return $this->OtherCharges;
    }

    /**
     * @param \Booni3\GFS\Type\Money $OtherCharges
     * @return CustomsDetails
     */
    public function withOtherCharges($OtherCharges)
    {
        $new = clone $this;
        $new->OtherCharges = $OtherCharges;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param \Booni3\GFS\Type\Money $Discount
     * @return CustomsDetails
     */
    public function withDiscount($Discount)
    {
        $new = clone $this;
        $new->Discount = $Discount;

        return $new;
    }

    /**
     * @return string
     */
    public function getFDA()
    {
        return $this->FDA;
    }

    /**
     * @param string $FDA
     * @return CustomsDetails
     */
    public function withFDA($FDA)
    {
        $new = clone $this;
        $new->FDA = $FDA;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDocOnly()
    {
        return $this->DocOnly;
    }

    /**
     * @param bool $DocOnly
     * @return CustomsDetails
     */
    public function withDocOnly($DocOnly)
    {
        $new = clone $this;
        $new->DocOnly = $DocOnly;

        return $new;
    }

    /**
     * @return string
     */
    public function getAdmissibility()
    {
        return $this->Admissibility;
    }

    /**
     * @param string $Admissibility
     * @return CustomsDetails
     */
    public function withAdmissibility($Admissibility)
    {
        $new = clone $this;
        $new->Admissibility = $Admissibility;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getInsuranceCharge()
    {
        return $this->InsuranceCharge;
    }

    /**
     * @param \Booni3\GFS\Type\Money $InsuranceCharge
     * @return CustomsDetails
     */
    public function withInsuranceCharge($InsuranceCharge)
    {
        $new = clone $this;
        $new->InsuranceCharge = $InsuranceCharge;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ShipDocument
     */
    public function getShipDocuments()
    {
        return $this->ShipDocuments;
    }

    /**
     * @param \Booni3\GFS\Type\ShipDocument $ShipDocuments
     * @return CustomsDetails
     */
    public function withShipDocuments($ShipDocuments)
    {
        $new = clone $this;
        $new->ShipDocuments = $ShipDocuments;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Commodity
     */
    public function getCommodities()
    {
        return $this->Commodities;
    }

    /**
     * @param \Booni3\GFS\Type\Commodity $Commodities
     * @return CustomsDetails
     */
    public function withCommodities($Commodities)
    {
        $new = clone $this;
        $new->Commodities = $Commodities;

        return $new;
    }

    /**
     * @return string
     */
    public function getTermsOfSale()
    {
        return $this->TermsOfSale;
    }

    /**
     * @param string $TermsOfSale
     * @return CustomsDetails
     */
    public function withTermsOfSale($TermsOfSale)
    {
        $new = clone $this;
        $new->TermsOfSale = $TermsOfSale;

        return $new;
    }

    /**
     * @return string
     */
    public function getPurpose()
    {
        return $this->Purpose;
    }

    /**
     * @param string $Purpose
     * @return CustomsDetails
     */
    public function withPurpose($Purpose)
    {
        $new = clone $this;
        $new->Purpose = $Purpose;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getTaxesCharge()
    {
        return $this->TaxesCharge;
    }

    /**
     * @param \Booni3\GFS\Type\Money $TaxesCharge
     * @return CustomsDetails
     */
    public function withTaxesCharge($TaxesCharge)
    {
        $new = clone $this;
        $new->TaxesCharge = $TaxesCharge;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getFreightCharge()
    {
        return $this->FreightCharge;
    }

    /**
     * @param \Booni3\GFS\Type\Money $FreightCharge
     * @return CustomsDetails
     */
    public function withFreightCharge($FreightCharge)
    {
        $new = clone $this;
        $new->FreightCharge = $FreightCharge;

        return $new;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->Comments;
    }

    /**
     * @param string $Comments
     * @return CustomsDetails
     */
    public function withComments($Comments)
    {
        $new = clone $this;
        $new->Comments = $Comments;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNafta()
    {
        return $this->Nafta;
    }

    /**
     * @param bool $Nafta
     * @return CustomsDetails
     */
    public function withNafta($Nafta)
    {
        $new = clone $this;
        $new->Nafta = $Nafta;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFood()
    {
        return $this->Food;
    }

    /**
     * @param bool $Food
     * @return CustomsDetails
     */
    public function withFood($Food)
    {
        $new = clone $this;
        $new->Food = $Food;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEurCirculation()
    {
        return $this->EurCirculation;
    }

    /**
     * @param bool $EurCirculation
     * @return CustomsDetails
     */
    public function withEurCirculation($EurCirculation)
    {
        $new = clone $this;
        $new->EurCirculation = $EurCirculation;

        return $new;
    }

    /**
     * @return string
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }

    /**
     * @param string $RecipientType
     * @return CustomsDetails
     */
    public function withRecipientType($RecipientType)
    {
        $new = clone $this;
        $new->RecipientType = $RecipientType;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getImporter()
    {
        return $this->Importer;
    }

    /**
     * @param \Booni3\GFS\Type\Party $Importer
     * @return CustomsDetails
     */
    public function withImporter($Importer)
    {
        $new = clone $this;
        $new->Importer = $Importer;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Payment
     */
    public function getDutiesPayment()
    {
        return $this->DutiesPayment;
    }

    /**
     * @param \Booni3\GFS\Type\Payment $DutiesPayment
     * @return CustomsDetails
     */
    public function withDutiesPayment($DutiesPayment)
    {
        $new = clone $this;
        $new->DutiesPayment = $DutiesPayment;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ClearanceBroker
     */
    public function getClearanceBroker()
    {
        return $this->ClearanceBroker;
    }

    /**
     * @param \Booni3\GFS\Type\ClearanceBroker $ClearanceBroker
     * @return CustomsDetails
     */
    public function withClearanceBroker($ClearanceBroker)
    {
        $new = clone $this;
        $new->ClearanceBroker = $ClearanceBroker;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getCustomsAmount()
    {
        return $this->CustomsAmount;
    }

    /**
     * @param \Booni3\GFS\Type\Money $CustomsAmount
     * @return CustomsDetails
     */
    public function withCustomsAmount($CustomsAmount)
    {
        $new = clone $this;
        $new->CustomsAmount = $CustomsAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomsNumber()
    {
        return $this->CustomsNumber;
    }

    /**
     * @param string $CustomsNumber
     * @return CustomsDetails
     */
    public function withCustomsNumber($CustomsNumber)
    {
        $new = clone $this;
        $new->CustomsNumber = $CustomsNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomsReference()
    {
        return $this->CustomsReference;
    }

    /**
     * @param string $CustomsReference
     * @return CustomsDetails
     */
    public function withCustomsReference($CustomsReference)
    {
        $new = clone $this;
        $new->CustomsReference = $CustomsReference;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountryOfManufacture()
    {
        return $this->CountryOfManufacture;
    }

    /**
     * @param string $CountryOfManufacture
     * @return CustomsDetails
     */
    public function withCountryOfManufacture($CountryOfManufacture)
    {
        $new = clone $this;
        $new->CountryOfManufacture = $CountryOfManufacture;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustomsInvoice()
    {
        return $this->CustomsInvoice;
    }

    /**
     * @param string $CustomsInvoice
     * @return CustomsDetails
     */
    public function withCustomsInvoice($CustomsInvoice)
    {
        $new = clone $this;
        $new->CustomsInvoice = $CustomsInvoice;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCustomsInvoiceDate()
    {
        return $this->CustomsInvoiceDate;
    }

    /**
     * @param \DateTimeInterface $CustomsInvoiceDate
     * @return CustomsDetails
     */
    public function withCustomsInvoiceDate($CustomsInvoiceDate)
    {
        $new = clone $this;
        $new->CustomsInvoiceDate = $CustomsInvoiceDate;

        return $new;
    }


}

