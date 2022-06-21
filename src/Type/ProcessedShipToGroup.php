<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedShipToGroup implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipReplies
     */
    private $ShipToGroupResult;

    /**
     * @return \Booni3\GFS\Type\ShipReplies
     */
    public function getShipToGroupResult()
    {
        return $this->ShipToGroupResult;
    }

    /**
     * @param \Booni3\GFS\Type\ShipReplies $ShipToGroupResult
     * @return ProcessedShipToGroup
     */
    public function withShipToGroupResult($ShipToGroupResult)
    {
        $new = clone $this;
        $new->ShipToGroupResult = $ShipToGroupResult;

        return $new;
    }


}

