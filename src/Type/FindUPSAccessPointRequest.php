<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class FindUPSAccessPointRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\FindUPSAccessPointRequest
     */
    private $findRequest;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $Authentication;

    /**
     * @var string
     */
    private $ConsNo;

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var int
     */
    private $SiteID;

    /**
     * @var string
     */
    private $AccessPointID;

    /**
     * @var \Booni3\GFS\Type\Geocode
     */
    private $SearchGeocode;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $SearchAddress;

    /**
     * @var int
     */
    private $Size;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\FindUPSAccessPointRequest $findRequest
     * @var \Booni3\GFS\Type\AuthenticationDetails $Authentication
     * @var string $ConsNo
     * @var string $ContractNo
     * @var int $SiteID
     * @var string $AccessPointID
     * @var \Booni3\GFS\Type\Geocode $SearchGeocode
     * @var \Booni3\GFS\Type\Address $SearchAddress
     * @var int $Size
     */
    public function __construct($findRequest, $Authentication, $ConsNo, $ContractNo, $SiteID, $AccessPointID, $SearchGeocode, $SearchAddress, $Size)
    {
        $this->findRequest = $findRequest;
        $this->Authentication = $Authentication;
        $this->ConsNo = $ConsNo;
        $this->ContractNo = $ContractNo;
        $this->SiteID = $SiteID;
        $this->AccessPointID = $AccessPointID;
        $this->SearchGeocode = $SearchGeocode;
        $this->SearchAddress = $SearchAddress;
        $this->Size = $Size;
    }

    /**
     * @return \Booni3\GFS\Type\FindUPSAccessPointRequest
     */
    public function getFindRequest()
    {
        return $this->findRequest;
    }

    /**
     * @param \Booni3\GFS\Type\FindUPSAccessPointRequest $findRequest
     * @return FindUPSAccessPointRequest
     */
    public function withFindRequest($findRequest)
    {
        $new = clone $this;
        $new->findRequest = $findRequest;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthentication()
    {
        return $this->Authentication;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $Authentication
     * @return FindUPSAccessPointRequest
     */
    public function withAuthentication($Authentication)
    {
        $new = clone $this;
        $new->Authentication = $Authentication;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsNo()
    {
        return $this->ConsNo;
    }

    /**
     * @param string $ConsNo
     * @return FindUPSAccessPointRequest
     */
    public function withConsNo($ConsNo)
    {
        $new = clone $this;
        $new->ConsNo = $ConsNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return FindUPSAccessPointRequest
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

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
     * @return FindUPSAccessPointRequest
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
    public function getAccessPointID()
    {
        return $this->AccessPointID;
    }

    /**
     * @param string $AccessPointID
     * @return FindUPSAccessPointRequest
     */
    public function withAccessPointID($AccessPointID)
    {
        $new = clone $this;
        $new->AccessPointID = $AccessPointID;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Geocode
     */
    public function getSearchGeocode()
    {
        return $this->SearchGeocode;
    }

    /**
     * @param \Booni3\GFS\Type\Geocode $SearchGeocode
     * @return FindUPSAccessPointRequest
     */
    public function withSearchGeocode($SearchGeocode)
    {
        $new = clone $this;
        $new->SearchGeocode = $SearchGeocode;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getSearchAddress()
    {
        return $this->SearchAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $SearchAddress
     * @return FindUPSAccessPointRequest
     */
    public function withSearchAddress($SearchAddress)
    {
        $new = clone $this;
        $new->SearchAddress = $SearchAddress;

        return $new;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     * @param int $Size
     * @return FindUPSAccessPointRequest
     */
    public function withSize($Size)
    {
        $new = clone $this;
        $new->Size = $Size;

        return $new;
    }


}

