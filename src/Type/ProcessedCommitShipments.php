<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedCommitShipments implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\CommitShipmentsResponse
     */
    private $CommitShipmentsResult;

    /**
     * @return \Booni3\GFS\Type\CommitShipmentsResponse
     */
    public function getCommitShipmentsResult()
    {
        return $this->CommitShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\CommitShipmentsResponse $CommitShipmentsResult
     * @return ProcessedCommitShipments
     */
    public function withCommitShipmentsResult($CommitShipmentsResult)
    {
        $new = clone $this;
        $new->CommitShipmentsResult = $CommitShipmentsResult;

        return $new;
    }


}

