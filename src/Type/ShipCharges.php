<?php

namespace Booni3\GFS\Type;

class ShipCharges
{

    /**
     * @var float
     */
    private $CarriageCharge;

    /**
     * @var float
     */
    private $FuelCharge;

    /**
     * @var float
     */
    private $TaxCharge;

    /**
     * @var float
     */
    private $TotalCharge;

    /**
     * @return float
     */
    public function getCarriageCharge()
    {
        return $this->CarriageCharge;
    }

    /**
     * @param float $CarriageCharge
     * @return ShipCharges
     */
    public function withCarriageCharge($CarriageCharge)
    {
        $new = clone $this;
        $new->CarriageCharge = $CarriageCharge;

        return $new;
    }

    /**
     * @return float
     */
    public function getFuelCharge()
    {
        return $this->FuelCharge;
    }

    /**
     * @param float $FuelCharge
     * @return ShipCharges
     */
    public function withFuelCharge($FuelCharge)
    {
        $new = clone $this;
        $new->FuelCharge = $FuelCharge;

        return $new;
    }

    /**
     * @return float
     */
    public function getTaxCharge()
    {
        return $this->TaxCharge;
    }

    /**
     * @param float $TaxCharge
     * @return ShipCharges
     */
    public function withTaxCharge($TaxCharge)
    {
        $new = clone $this;
        $new->TaxCharge = $TaxCharge;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotalCharge()
    {
        return $this->TotalCharge;
    }

    /**
     * @param float $TotalCharge
     * @return ShipCharges
     */
    public function withTotalCharge($TotalCharge)
    {
        $new = clone $this;
        $new->TotalCharge = $TotalCharge;

        return $new;
    }


}

