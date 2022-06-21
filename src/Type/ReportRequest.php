<?php

namespace Booni3\GFS\Type;

class ReportRequest
{

    /**
     * @var int
     */
    private $ReportCopies;

    /**
     * @var int
     */
    private $ReportMonth;

    /**
     * @var int
     */
    private $ReportYear;

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpecification;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\CarrierServiceGroup
     */
    private $CarrierServiceGroups;

    /**
     * @return int
     */
    public function getReportCopies()
    {
        return $this->ReportCopies;
    }

    /**
     * @param int $ReportCopies
     * @return ReportRequest
     */
    public function withReportCopies($ReportCopies)
    {
        $new = clone $this;
        $new->ReportCopies = $ReportCopies;

        return $new;
    }

    /**
     * @return int
     */
    public function getReportMonth()
    {
        return $this->ReportMonth;
    }

    /**
     * @param int $ReportMonth
     * @return ReportRequest
     */
    public function withReportMonth($ReportMonth)
    {
        $new = clone $this;
        $new->ReportMonth = $ReportMonth;

        return $new;
    }

    /**
     * @return int
     */
    public function getReportYear()
    {
        return $this->ReportYear;
    }

    /**
     * @param int $ReportYear
     * @return ReportRequest
     */
    public function withReportYear($ReportYear)
    {
        $new = clone $this;
        $new->ReportYear = $ReportYear;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintSpecification
     */
    public function getPrintSpecification()
    {
        return $this->PrintSpecification;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSpecification $PrintSpecification
     * @return ReportRequest
     */
    public function withPrintSpecification($PrintSpecification)
    {
        $new = clone $this;
        $new->PrintSpecification = $PrintSpecification;

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
     * @return ReportRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierServiceGroup
     */
    public function getCarrierServiceGroups()
    {
        return $this->CarrierServiceGroups;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServiceGroup $CarrierServiceGroups
     * @return ReportRequest
     */
    public function withCarrierServiceGroups($CarrierServiceGroups)
    {
        $new = clone $this;
        $new->CarrierServiceGroups = $CarrierServiceGroups;

        return $new;
    }


}

