<?php

namespace Booni3\GFS\Type;

class CommitShipmentsRequest
{

    /**
     * @var int
     */
    private $ManifestCopies;

    /**
     * @var int
     */
    private $SiteID;

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
    public function getManifestCopies()
    {
        return $this->ManifestCopies;
    }

    /**
     * @param int $ManifestCopies
     * @return CommitShipmentsRequest
     */
    public function withManifestCopies($ManifestCopies)
    {
        $new = clone $this;
        $new->ManifestCopies = $ManifestCopies;

        return $new;
    }

    /**
     * @return int
     */
    public function getSiteID()
    {
        return $this->SiteID;
    }

    /**
     * @param int $SiteID
     * @return CommitShipmentsRequest
     */
    public function withSiteID($SiteID)
    {
        $new = clone $this;
        $new->SiteID = $SiteID;

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
     * @return CommitShipmentsRequest
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
     * @return CommitShipmentsRequest
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
     * @return CommitShipmentsRequest
     */
    public function withCarrierServiceGroups($CarrierServiceGroups)
    {
        $new = clone $this;
        $new->CarrierServiceGroups = $CarrierServiceGroups;

        return $new;
    }


}

