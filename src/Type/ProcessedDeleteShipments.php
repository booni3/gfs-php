<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedDeleteShipments implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\DeleteShipmentsResponse
     */
    private $DeleteShipmentsResult;

    /**
     * @return \Booni3\GFS\Type\DeleteShipmentsResponse
     */
    public function getDeleteShipmentsResult()
    {
        return $this->DeleteShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\DeleteShipmentsResponse $DeleteShipmentsResult
     * @return ProcessedDeleteShipments
     */
    public function withDeleteShipmentsResult($DeleteShipmentsResult)
    {
        $new = clone $this;
        $new->DeleteShipmentsResult = $DeleteShipmentsResult;

        return $new;
    }


}

