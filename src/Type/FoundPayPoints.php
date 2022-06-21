<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FoundPayPoints implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\AvailablePayPoints
     */
    private $FindAvailablePayPointsResult;

    /**
     * @return \Booni3\GFS\Type\AvailablePayPoints
     */
    public function getFindAvailablePayPointsResult()
    {
        return $this->FindAvailablePayPointsResult;
    }

    /**
     * @param \Booni3\GFS\Type\AvailablePayPoints $FindAvailablePayPointsResult
     * @return FoundPayPoints
     */
    public function withFindAvailablePayPointsResult($FindAvailablePayPointsResult)
    {
        $new = clone $this;
        $new->FindAvailablePayPointsResult = $FindAvailablePayPointsResult;

        return $new;
    }


}

