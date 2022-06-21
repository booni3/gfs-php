<?php

namespace Booni3\GFS\Type;

class DispatchFreightDetails
{

    /**
     * @var string
     */
    private $BookingNumber;

    /**
     * @var \Booni3\GFS\Type\Dimensions
     */
    private $Dimensions;

    /**
     * @var string
     */
    private $TrailerSizeType;

    /**
     * @var string
     */
    private $TruckType;

    /**
     * @return string
     */
    public function getBookingNumber()
    {
        return $this->BookingNumber;
    }

    /**
     * @param string $BookingNumber
     * @return DispatchFreightDetails
     */
    public function withBookingNumber($BookingNumber)
    {
        $new = clone $this;
        $new->BookingNumber = $BookingNumber;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }

    /**
     * @param \Booni3\GFS\Type\Dimensions $Dimensions
     * @return DispatchFreightDetails
     */
    public function withDimensions($Dimensions)
    {
        $new = clone $this;
        $new->Dimensions = $Dimensions;

        return $new;
    }

    /**
     * @return string
     */
    public function getTrailerSizeType()
    {
        return $this->TrailerSizeType;
    }

    /**
     * @param string $TrailerSizeType
     * @return DispatchFreightDetails
     */
    public function withTrailerSizeType($TrailerSizeType)
    {
        $new = clone $this;
        $new->TrailerSizeType = $TrailerSizeType;

        return $new;
    }

    /**
     * @return string
     */
    public function getTruckType()
    {
        return $this->TruckType;
    }

    /**
     * @param string $TruckType
     * @return DispatchFreightDetails
     */
    public function withTruckType($TruckType)
    {
        $new = clone $this;
        $new->TruckType = $TruckType;

        return $new;
    }


}

