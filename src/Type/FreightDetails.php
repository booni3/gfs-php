<?php

namespace Booni3\GFS\Type;

class FreightDetails
{

    /**
     * @var string
     */
    private $BookinRef;

    /**
     * @var bool
     */
    private $SpecialVehicle;

    /**
     * @var int
     */
    private $ShippersLoadAndCount;

    /**
     * @var bool
     */
    private $FreightEnclosed;

    /**
     * @var string
     */
    private $BookingNumber;

    /**
     * @return string
     */
    public function getBookinRef()
    {
        return $this->BookinRef;
    }

    /**
     * @param string $BookinRef
     * @return FreightDetails
     */
    public function withBookinRef($BookinRef)
    {
        $new = clone $this;
        $new->BookinRef = $BookinRef;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSpecialVehicle()
    {
        return $this->SpecialVehicle;
    }

    /**
     * @param bool $SpecialVehicle
     * @return FreightDetails
     */
    public function withSpecialVehicle($SpecialVehicle)
    {
        $new = clone $this;
        $new->SpecialVehicle = $SpecialVehicle;

        return $new;
    }

    /**
     * @return int
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }

    /**
     * @param int $ShippersLoadAndCount
     * @return FreightDetails
     */
    public function withShippersLoadAndCount($ShippersLoadAndCount)
    {
        $new = clone $this;
        $new->ShippersLoadAndCount = $ShippersLoadAndCount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getFreightEnclosed()
    {
        return $this->FreightEnclosed;
    }

    /**
     * @param bool $FreightEnclosed
     * @return FreightDetails
     */
    public function withFreightEnclosed($FreightEnclosed)
    {
        $new = clone $this;
        $new->FreightEnclosed = $FreightEnclosed;

        return $new;
    }

    /**
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }

    /**
     * @param string $BookingNumber
     * @return FreightDetails
     */
    public function withBookingNumber($BookingNumber)
    {
        $new = clone $this;
        $new->BookingNumber = $BookingNumber;

        return $new;
    }


}

