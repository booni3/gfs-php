<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedShipments implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipReplies
     */
    private $ProcessShipmentsResult;

    /**
     * @return \Booni3\GFS\Type\ShipReplies
     */
    public function getProcessShipmentsResult()
    {
        return $this->ProcessShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\ShipReplies $ProcessShipmentsResult
     * @return ProcessedShipments
     */
    public function withProcessShipmentsResult($ProcessShipmentsResult)
    {
        $new = clone $this;
        $new->ProcessShipmentsResult = $ProcessShipmentsResult;

        return $new;
    }


}

