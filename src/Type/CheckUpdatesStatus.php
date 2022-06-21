<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CheckUpdatesStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $CheckUpdatesResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getCheckUpdatesResult()
    {
        return $this->CheckUpdatesResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $CheckUpdatesResult
     * @return CheckUpdatesStatus
     */
    public function withCheckUpdatesResult($CheckUpdatesResult)
    {
        $new = clone $this;
        $new->CheckUpdatesResult = $CheckUpdatesResult;

        return $new;
    }


}

