<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UPSLabelsRecoveryRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\UPSLabelsRecoveryRequest
     */
    private $upsLabelsRequest;

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
     * Constructor
     *
     * @var \Booni3\GFS\Type\UPSLabelsRecoveryRequest $upsLabelsRequest
     * @var \Booni3\GFS\Type\AuthenticationDetails $Authentication
     * @var string $ConsNo
     * @var string $ContractNo
     * @var int $SiteID
     */
    public function __construct($upsLabelsRequest, $Authentication, $ConsNo, $ContractNo, $SiteID)
    {
        $this->upsLabelsRequest = $upsLabelsRequest;
        $this->Authentication = $Authentication;
        $this->ConsNo = $ConsNo;
        $this->ContractNo = $ContractNo;
        $this->SiteID = $SiteID;
    }

    /**
     * @return \Booni3\GFS\Type\UPSLabelsRecoveryRequest
     */
    public function getUpsLabelsRequest()
    {
        return $this->upsLabelsRequest;
    }

    /**
     * @param \Booni3\GFS\Type\UPSLabelsRecoveryRequest $upsLabelsRequest
     * @return UPSLabelsRecoveryRequest
     */
    public function withUpsLabelsRequest($upsLabelsRequest)
    {
        $new = clone $this;
        $new->upsLabelsRequest = $upsLabelsRequest;

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
     * @return UPSLabelsRecoveryRequest
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
     * @return UPSLabelsRecoveryRequest
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
     * @return UPSLabelsRecoveryRequest
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
     * @return UPSLabelsRecoveryRequest
     */
    public function withSiteID($SiteID)
    {
        $new = clone $this;
        $new->SiteID = $SiteID;

        return $new;
    }


}

