<?php

namespace Booni3\GFS\Type;

class DailyShipItem
{

    /**
     * @var string
     */
    private $ConsignmentNo;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ShipRef;

    /**
     * @var int
     */
    private $Packs;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \DateTimeInterface
     */
    private $PrintTime;

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
        return $this->ConsignmentNo;
    }

    /**
     * @param string $ConsignmentNo
     * @return DailyShipItem
     */
    public function withConsignmentNo($ConsignmentNo)
    {
        $new = clone $this;
        $new->ConsignmentNo = $ConsignmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return DailyShipItem
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipRef()
    {
        return $this->ShipRef;
    }

    /**
     * @param string $ShipRef
     * @return DailyShipItem
     */
    public function withShipRef($ShipRef)
    {
        $new = clone $this;
        $new->ShipRef = $ShipRef;

        return $new;
    }

    /**
     * @return int
     */
    public function getPacks()
    {
        return $this->Packs;
    }

    /**
     * @param int $Packs
     * @return DailyShipItem
     */
    public function withPacks($Packs)
    {
        $new = clone $this;
        $new->Packs = $Packs;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return DailyShipItem
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getPrintTime()
    {
        return $this->PrintTime;
    }

    /**
     * @param \DateTimeInterface $PrintTime
     * @return DailyShipItem
     */
    public function withPrintTime($PrintTime)
    {
        $new = clone $this;
        $new->PrintTime = $PrintTime;

        return $new;
    }


}

