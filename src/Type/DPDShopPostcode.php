<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class DPDShopPostcode implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\DPDShopPostcode
     */
    private $SearchPostcode;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var int
     */
    private $SiteID;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $CountryCode;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\DPDShopPostcode $SearchPostcode
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @var int $SiteID
     * @var string $Postcode
     * @var string $CountryCode
     */
    public function __construct($SearchPostcode, $AuthenticationDetails, $SiteID, $Postcode, $CountryCode)
    {
        $this->SearchPostcode = $SearchPostcode;
        $this->AuthenticationDetails = $AuthenticationDetails;
        $this->SiteID = $SiteID;
        $this->Postcode = $Postcode;
        $this->CountryCode = $CountryCode;
    }

    /**
     * @return \Booni3\GFS\Type\DPDShopPostcode
     */
    public function getSearchPostcode()
    {
        return $this->SearchPostcode;
    }

    /**
     * @param \Booni3\GFS\Type\DPDShopPostcode $SearchPostcode
     * @return DPDShopPostcode
     */
    public function withSearchPostcode($SearchPostcode)
    {
        $new = clone $this;
        $new->SearchPostcode = $SearchPostcode;

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
     * @return DPDShopPostcode
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

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
     * @return DPDShopPostcode
     */
    public function withSiteID($SiteID)
    {
        $new = clone $this;
        $new->SiteID = $SiteID;

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
     * @return DPDShopPostcode
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
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * @param string $CountryCode
     * @return DPDShopPostcode
     */
    public function withCountryCode($CountryCode)
    {
        $new = clone $this;
        $new->CountryCode = $CountryCode;

        return $new;
    }


}

