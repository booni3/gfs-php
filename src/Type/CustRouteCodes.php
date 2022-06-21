<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CustRouteCodes implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\CustRouteCodes
     */
    private $GetCustRoutesResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\ArrayOfCustRouteCode
     */
    private $RouteCodes;

    /**
     * @return \Booni3\GFS\Type\CustRouteCodes
     */
    public function getGetCustRoutesResult()
    {
        return $this->GetCustRoutesResult;
    }

    /**
     * @param \Booni3\GFS\Type\CustRouteCodes $GetCustRoutesResult
     * @return CustRouteCodes
     */
    public function withGetCustRoutesResult($GetCustRoutesResult)
    {
        $new = clone $this;
        $new->GetCustRoutesResult = $GetCustRoutesResult;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return CustRouteCodes
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfCustRouteCode
     */
    public function getRouteCodes()
    {
        return $this->RouteCodes;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfCustRouteCode $RouteCodes
     * @return CustRouteCodes
     */
    public function withRouteCodes($RouteCodes)
    {
        $new = clone $this;
        $new->RouteCodes = $RouteCodes;

        return $new;
    }


}

