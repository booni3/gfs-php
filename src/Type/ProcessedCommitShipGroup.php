<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedCommitShipGroup implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\CommitShipGroupResponse
     */
    private $CommitShipGroupResult;

    /**
     * @return \Booni3\GFS\Type\CommitShipGroupResponse
     */
    public function getCommitShipGroupResult()
    {
        return $this->CommitShipGroupResult;
    }

    /**
     * @param \Booni3\GFS\Type\CommitShipGroupResponse $CommitShipGroupResult
     * @return ProcessedCommitShipGroup
     */
    public function withCommitShipGroupResult($CommitShipGroupResult)
    {
        $new = clone $this;
        $new->CommitShipGroupResult = $CommitShipGroupResult;

        return $new;
    }


}

