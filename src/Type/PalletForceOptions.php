<?php

namespace Booni3\GFS\Type;

class PalletForceOptions
{

    /**
     * @var string
     */
    private $consType;

    /**
     * @var bool
     */
    private $amDelivery;

    /**
     * @var bool
     */
    private $bookIn;

    /**
     * @var bool
     */
    private $bookedWindow;

    /**
     * @var bool
     */
    private $cod;

    /**
     * @var bool
     */
    private $economyDelivery;

    /**
     * @var bool
     */
    private $satAM;

    /**
     * @var bool
     */
    private $by10AM;

    /**
     * @var bool
     */
    private $timedBooking;

    /**
     * @var bool
     */
    private $tlVechicle;

    /**
     * @var bool
     */
    private $paperPOD;

    /**
     * @var \DateTimeInterface
     */
    private $deliveryDate;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $windowTime;

    /**
     * @return string
     */
    public function getConsType()
    {
        return $this->consType;
    }

    /**
     * @param string $consType
     * @return PalletForceOptions
     */
    public function withConsType($consType)
    {
        $new = clone $this;
        $new->consType = $consType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAmDelivery()
    {
        return $this->amDelivery;
    }

    /**
     * @param bool $amDelivery
     * @return PalletForceOptions
     */
    public function withAmDelivery($amDelivery)
    {
        $new = clone $this;
        $new->amDelivery = $amDelivery;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBookIn()
    {
        return $this->bookIn;
    }

    /**
     * @param bool $bookIn
     * @return PalletForceOptions
     */
    public function withBookIn($bookIn)
    {
        $new = clone $this;
        $new->bookIn = $bookIn;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBookedWindow()
    {
        return $this->bookedWindow;
    }

    /**
     * @param bool $bookedWindow
     * @return PalletForceOptions
     */
    public function withBookedWindow($bookedWindow)
    {
        $new = clone $this;
        $new->bookedWindow = $bookedWindow;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @param bool $cod
     * @return PalletForceOptions
     */
    public function withCod($cod)
    {
        $new = clone $this;
        $new->cod = $cod;

        return $new;
    }

    /**
     * @return bool
     */
    public function getEconomyDelivery()
    {
        return $this->economyDelivery;
    }

    /**
     * @param bool $economyDelivery
     * @return PalletForceOptions
     */
    public function withEconomyDelivery($economyDelivery)
    {
        $new = clone $this;
        $new->economyDelivery = $economyDelivery;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSatAM()
    {
        return $this->satAM;
    }

    /**
     * @param bool $satAM
     * @return PalletForceOptions
     */
    public function withSatAM($satAM)
    {
        $new = clone $this;
        $new->satAM = $satAM;

        return $new;
    }

    /**
     * @return bool
     */
    public function getBy10AM()
    {
        return $this->by10AM;
    }

    /**
     * @param bool $by10AM
     * @return PalletForceOptions
     */
    public function withBy10AM($by10AM)
    {
        $new = clone $this;
        $new->by10AM = $by10AM;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTimedBooking()
    {
        return $this->timedBooking;
    }

    /**
     * @param bool $timedBooking
     * @return PalletForceOptions
     */
    public function withTimedBooking($timedBooking)
    {
        $new = clone $this;
        $new->timedBooking = $timedBooking;

        return $new;
    }

    /**
     * @return bool
     */
    public function getTlVechicle()
    {
        return $this->tlVechicle;
    }

    /**
     * @param bool $tlVechicle
     * @return PalletForceOptions
     */
    public function withTlVechicle($tlVechicle)
    {
        $new = clone $this;
        $new->tlVechicle = $tlVechicle;

        return $new;
    }

    /**
     * @return bool
     */
    public function getPaperPOD()
    {
        return $this->paperPOD;
    }

    /**
     * @param bool $paperPOD
     * @return PalletForceOptions
     */
    public function withPaperPOD($paperPOD)
    {
        $new = clone $this;
        $new->paperPOD = $paperPOD;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTimeInterface $deliveryDate
     * @return PalletForceOptions
     */
    public function withDeliveryDate($deliveryDate)
    {
        $new = clone $this;
        $new->deliveryDate = $deliveryDate;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getWindowTime()
    {
        return $this->windowTime;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $windowTime
     * @return PalletForceOptions
     */
    public function withWindowTime($windowTime)
    {
        $new = clone $this;
        $new->windowTime = $windowTime;

        return $new;
    }


}

