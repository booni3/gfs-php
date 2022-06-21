<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedDailyQuery implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\DailyShipRequest
     */
    private $DailyRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\DailyShipRequest $DailyRequest
     */
    public function __construct($DailyRequest)
    {
        $this->DailyRequest = $DailyRequest;
    }

    /**
     * @return \Booni3\GFS\Type\DailyShipRequest
     */
    public function getDailyRequest()
    {
        return $this->DailyRequest;
    }

    /**
     * @param \Booni3\GFS\Type\DailyShipRequest $DailyRequest
     * @return RequestedDailyQuery
     */
    public function withDailyRequest($DailyRequest)
    {
        $new = clone $this;
        $new->DailyRequest = $DailyRequest;

        return $new;
    }


}

