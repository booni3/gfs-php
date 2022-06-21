<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedCarrierLocation implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\FindLocationResponse
     */
    private $FindCarrierLocationResult;

    /**
     * @return \Booni3\GFS\Type\FindLocationResponse
     */
    public function getFindCarrierLocationResult()
    {
        return $this->FindCarrierLocationResult;
    }

    /**
     * @param \Booni3\GFS\Type\FindLocationResponse $FindCarrierLocationResult
     * @return ProcessedCarrierLocation
     */
    public function withFindCarrierLocationResult($FindCarrierLocationResult)
    {
        $new = clone $this;
        $new->FindCarrierLocationResult = $FindCarrierLocationResult;

        return $new;
    }


}

