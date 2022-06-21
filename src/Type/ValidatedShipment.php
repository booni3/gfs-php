<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidatedShipment implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\RequestedShipment
     */
    private $RequestedShipment;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $ValidateShipmentResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return ValidatedShipment
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedShipment
     */
    public function getRequestedShipment()
    {
        return $this->RequestedShipment;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedShipment $RequestedShipment
     * @return ValidatedShipment
     */
    public function withRequestedShipment($RequestedShipment)
    {
        $new = clone $this;
        $new->RequestedShipment = $RequestedShipment;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getValidateShipmentResult()
    {
        return $this->ValidateShipmentResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $ValidateShipmentResult
     * @return ValidatedShipment
     */
    public function withValidateShipmentResult($ValidateShipmentResult)
    {
        $new = clone $this;
        $new->ValidateShipmentResult = $ValidateShipmentResult;

        return $new;
    }


}

