<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedCarrierDispatch implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\CarrierDispatchResponse
     */
    private $ProcessCarrierDispatchResult;

    /**
     * @return \Booni3\GFS\Type\CarrierDispatchResponse
     */
    public function getProcessCarrierDispatchResult()
    {
        return $this->ProcessCarrierDispatchResult;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierDispatchResponse $ProcessCarrierDispatchResult
     * @return ProcessedCarrierDispatch
     */
    public function withProcessCarrierDispatchResult($ProcessCarrierDispatchResult)
    {
        $new = clone $this;
        $new->ProcessCarrierDispatchResult = $ProcessCarrierDispatchResult;

        return $new;
    }


}

