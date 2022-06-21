<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidatedShipments implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidatedShipments
     */
    private $ValidateShipmentsResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\ArrayOfValidatedShipment
     */
    private $ValidatedShips;

    /**
     * @return \Booni3\GFS\Type\ValidatedShipments
     */
    public function getValidateShipmentsResult()
    {
        return $this->ValidateShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\ValidatedShipments $ValidateShipmentsResult
     * @return ValidatedShipments
     */
    public function withValidateShipmentsResult($ValidateShipmentsResult)
    {
        $new = clone $this;
        $new->ValidateShipmentsResult = $ValidateShipmentsResult;

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
     * @return ValidatedShipments
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfValidatedShipment
     */
    public function getValidatedShips()
    {
        return $this->ValidatedShips;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfValidatedShipment $ValidatedShips
     * @return ValidatedShipments
     */
    public function withValidatedShips($ValidatedShips)
    {
        $new = clone $this;
        $new->ValidatedShips = $ValidatedShips;

        return $new;
    }


}

