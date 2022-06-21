<?php

namespace Booni3\GFS\Type;

class LabelCarrier
{

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $LogoRef;

    /**
     * @var string
     */
    private $Barnum;

    /**
     * @var string
     */
    private $BarDisplay;

    /**
     * @var string
     */
    private $BarSymb;

    /**
     * @var string
     */
    private $SortLevels;

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return LabelCarrier
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
    public function getLogoRef()
    {
        return $this->LogoRef;
    }

    /**
     * @param string $LogoRef
     * @return LabelCarrier
     */
    public function withLogoRef($LogoRef)
    {
        $new = clone $this;
        $new->LogoRef = $LogoRef;

        return $new;
    }

    /**
     * @return string
     */
    public function getBarnum()
    {
        return $this->Barnum;
    }

    /**
     * @param string $Barnum
     * @return LabelCarrier
     */
    public function withBarnum($Barnum)
    {
        $new = clone $this;
        $new->Barnum = $Barnum;

        return $new;
    }

    /**
     * @return string
     */
    public function getBarDisplay()
    {
        return $this->BarDisplay;
    }

    /**
     * @param string $BarDisplay
     * @return LabelCarrier
     */
    public function withBarDisplay($BarDisplay)
    {
        $new = clone $this;
        $new->BarDisplay = $BarDisplay;

        return $new;
    }

    /**
     * @return string
     */
    public function getBarSymb()
    {
        return $this->BarSymb;
    }

    /**
     * @param string $BarSymb
     * @return LabelCarrier
     */
    public function withBarSymb($BarSymb)
    {
        $new = clone $this;
        $new->BarSymb = $BarSymb;

        return $new;
    }

    /**
     * @return string
     */
    public function getSortLevels()
    {
        return $this->SortLevels;
    }

    /**
     * @param string $SortLevels
     * @return LabelCarrier
     */
    public function withSortLevels($SortLevels)
    {
        $new = clone $this;
        $new->SortLevels = $SortLevels;

        return $new;
    }


}

