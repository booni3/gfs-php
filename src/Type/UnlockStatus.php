<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UnlockStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $UnlockServiceResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getUnlockServiceResult()
    {
        return $this->UnlockServiceResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $UnlockServiceResult
     * @return UnlockStatus
     */
    public function withUnlockServiceResult($UnlockServiceResult)
    {
        $new = clone $this;
        $new->UnlockServiceResult = $UnlockServiceResult;

        return $new;
    }


}

