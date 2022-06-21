<?php

namespace Booni3\GFS\Type;

class AramexOptions
{

    /**
     * @var bool
     */
    private $FreeDomicile;

    /**
     * @var bool
     */
    private $Signature;

    /**
     * @var bool
     */
    private $HoldForPickup;

    /**
     * @return bool
     */
    public function getFreeDomicile()
    {
        return $this->FreeDomicile;
    }

    /**
     * @param bool $FreeDomicile
     * @return AramexOptions
     */
    public function withFreeDomicile($FreeDomicile)
    {
        $new = clone $this;
        $new->FreeDomicile = $FreeDomicile;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * @param bool $Signature
     * @return AramexOptions
     */
    public function withSignature($Signature)
    {
        $new = clone $this;
        $new->Signature = $Signature;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHoldForPickup()
    {
        return $this->HoldForPickup;
    }

    /**
     * @param bool $HoldForPickup
     * @return AramexOptions
     */
    public function withHoldForPickup($HoldForPickup)
    {
        $new = clone $this;
        $new->HoldForPickup = $HoldForPickup;

        return $new;
    }


}

