<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class AvailableDPDShops implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\AvailableDPDShops
     */
    private $FindAvailableDPDShopsResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\DPDShop
     */
    private $FoundShops;

    /**
     * @return \Booni3\GFS\Type\AvailableDPDShops
     */
    public function getFindAvailableDPDShopsResult()
    {
        return $this->FindAvailableDPDShopsResult;
    }

    /**
     * @param \Booni3\GFS\Type\AvailableDPDShops $FindAvailableDPDShopsResult
     * @return AvailableDPDShops
     */
    public function withFindAvailableDPDShopsResult($FindAvailableDPDShopsResult)
    {
        $new = clone $this;
        $new->FindAvailableDPDShopsResult = $FindAvailableDPDShopsResult;

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
     * @return AvailableDPDShops
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DPDShop
     */
    public function getFoundShops()
    {
        return $this->FoundShops;
    }

    /**
     * @param \Booni3\GFS\Type\DPDShop $FoundShops
     * @return AvailableDPDShops
     */
    public function withFoundShops($FoundShops)
    {
        $new = clone $this;
        $new->FoundShops = $FoundShops;

        return $new;
    }


}

