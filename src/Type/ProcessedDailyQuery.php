<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedDailyQuery implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\DailyShipResponse
     */
    private $DailyShipQueryResult;

    /**
     * @return \Booni3\GFS\Type\DailyShipResponse
     */
    public function getDailyShipQueryResult()
    {
        return $this->DailyShipQueryResult;
    }

    /**
     * @param \Booni3\GFS\Type\DailyShipResponse $DailyShipQueryResult
     * @return ProcessedDailyQuery
     */
    public function withDailyShipQueryResult($DailyShipQueryResult)
    {
        $new = clone $this;
        $new->DailyShipQueryResult = $DailyShipQueryResult;

        return $new;
    }


}

