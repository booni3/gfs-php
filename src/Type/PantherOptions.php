<?php

namespace Booni3\GFS\Type;

class PantherOptions
{

    /**
     * @var bool
     */
    private $Pre12;

    /**
     * @var bool
     */
    private $Assembly;

    /**
     * @var bool
     */
    private $Wet;

    /**
     * @var bool
     */
    private $Disposal;

    /**
     * @var float
     */
    private $Cube;

    /**
     * @return bool
     */
    public function getPre12()
    {
        return $this->Pre12;
    }

    /**
     * @param bool $Pre12
     * @return PantherOptions
     */
    public function withPre12($Pre12)
    {
        $new = clone $this;
        $new->Pre12 = $Pre12;

        return $new;
    }

    /**
     * @return bool
     */
    public function getAssembly()
    {
        return $this->Assembly;
    }

    /**
     * @param bool $Assembly
     * @return PantherOptions
     */
    public function withAssembly($Assembly)
    {
        $new = clone $this;
        $new->Assembly = $Assembly;

        return $new;
    }

    /**
     * @return bool
     */
    public function getWet()
    {
        return $this->Wet;
    }

    /**
     * @param bool $Wet
     * @return PantherOptions
     */
    public function withWet($Wet)
    {
        $new = clone $this;
        $new->Wet = $Wet;

        return $new;
    }

    /**
     * @return bool
     */
    public function getDisposal()
    {
        return $this->Disposal;
    }

    /**
     * @param bool $Disposal
     * @return PantherOptions
     */
    public function withDisposal($Disposal)
    {
        $new = clone $this;
        $new->Disposal = $Disposal;

        return $new;
    }

    /**
     * @return float
     */
    public function getCube()
    {
        return $this->Cube;
    }

    /**
     * @param float $Cube
     * @return PantherOptions
     */
    public function withCube($Cube)
    {
        $new = clone $this;
        $new->Cube = $Cube;

        return $new;
    }


}

