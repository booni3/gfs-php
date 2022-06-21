<?php

namespace Booni3\GFS\Type;

class DailyShipResponse
{

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\DailyShipItem
     */
    private $DailyShipments;

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $Status
     * @return DailyShipResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DailyShipItem
     */
    public function getDailyShipments()
    {
        return $this->DailyShipments;
    }

    /**
     * @param \Booni3\GFS\Type\DailyShipItem $DailyShipments
     * @return DailyShipResponse
     */
    public function withDailyShipments($DailyShipments)
    {
        $new = clone $this;
        $new->DailyShipments = $DailyShipments;

        return $new;
    }


}

