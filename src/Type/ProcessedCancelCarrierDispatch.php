<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedCancelCarrierDispatch implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $CancelCarrierDispatchResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getCancelCarrierDispatchResult()
    {
        return $this->CancelCarrierDispatchResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $CancelCarrierDispatchResult
     * @return ProcessedCancelCarrierDispatch
     */
    public function withCancelCarrierDispatchResult($CancelCarrierDispatchResult)
    {
        $new = clone $this;
        $new->CancelCarrierDispatchResult = $CancelCarrierDispatchResult;

        return $new;
    }


}

