<?php

namespace Booni3\GFS\Type;

class PrintManifestRequest
{

    /**
     * @var \Booni3\GFS\Type\CarrierServiceGroup
     */
    private $CarrierServiceGroups;

    /**
     * @var bool
     */
    private $ExactTime;

    /**
     * @var int
     */
    private $SiteId;

    /**
     * @var \DateTimeInterface
     */
    private $ManifestDate;

    /**
     * @var int
     */
    private $ManifestCopies;

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpecification;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return \Booni3\GFS\Type\CarrierServiceGroup
     */
    public function getCarrierServiceGroups()
    {
        return $this->CarrierServiceGroups;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServiceGroup $CarrierServiceGroups
     * @return PrintManifestRequest
     */
    public function withCarrierServiceGroups($CarrierServiceGroups)
    {
        $new = clone $this;
        $new->CarrierServiceGroups = $CarrierServiceGroups;

        return $new;
    }

    /**
     * @return bool
     */
    public function getExactTime()
    {
        return $this->ExactTime;
    }

    /**
     * @param bool $ExactTime
     * @return PrintManifestRequest
     */
    public function withExactTime($ExactTime)
    {
        $new = clone $this;
        $new->ExactTime = $ExactTime;

        return $new;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param int $SiteId
     * @return PrintManifestRequest
     */
    public function withSiteId($SiteId)
    {
        $new = clone $this;
        $new->SiteId = $SiteId;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getManifestDate()
    {
        return $this->ManifestDate;
    }

    /**
     * @param \DateTimeInterface $ManifestDate
     * @return PrintManifestRequest
     */
    public function withManifestDate($ManifestDate)
    {
        $new = clone $this;
        $new->ManifestDate = $ManifestDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getManifestCopies()
    {
        return $this->ManifestCopies;
    }

    /**
     * @param int $ManifestCopies
     * @return PrintManifestRequest
     */
    public function withManifestCopies($ManifestCopies)
    {
        $new = clone $this;
        $new->ManifestCopies = $ManifestCopies;

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
     * @return PrintManifestRequest
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
     * @return PrintManifestRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

