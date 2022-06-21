<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FoundUPSAccessPoints implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\FoundUPSAccessPoints
     */
    private $FindUPSAccessPointsResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\UPSAccessPoint
     */
    private $FoundAccessPoints;

    /**
     * @return \Booni3\GFS\Type\FoundUPSAccessPoints
     */
    public function getFindUPSAccessPointsResult()
    {
        return $this->FindUPSAccessPointsResult;
    }

    /**
     * @param \Booni3\GFS\Type\FoundUPSAccessPoints $FindUPSAccessPointsResult
     * @return FoundUPSAccessPoints
     */
    public function withFindUPSAccessPointsResult($FindUPSAccessPointsResult)
    {
        $new = clone $this;
        $new->FindUPSAccessPointsResult = $FindUPSAccessPointsResult;

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
     * @return FoundUPSAccessPoints
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\UPSAccessPoint
     */
    public function getFoundAccessPoints()
    {
        return $this->FoundAccessPoints;
    }

    /**
     * @param \Booni3\GFS\Type\UPSAccessPoint $FoundAccessPoints
     * @return FoundUPSAccessPoints
     */
    public function withFoundAccessPoints($FoundAccessPoints)
    {
        $new = clone $this;
        $new->FoundAccessPoints = $FoundAccessPoints;

        return $new;
    }


}

