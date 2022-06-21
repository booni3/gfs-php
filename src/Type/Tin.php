<?php

namespace Booni3\GFS\Type;

class Tin
{

    /**
     * @var string
     */
    private $TinType;

    /**
     * @var string
     */
    private $TinNumber;

    /**
     * @return string
     */
    public function getTinType()
    {
        return $this->TinType;
    }

    /**
     * @param string $TinType
     * @return Tin
     */
    public function withTinType($TinType)
    {
        $new = clone $this;
        $new->TinType = $TinType;

        return $new;
    }

    /**
     * @return string
     */
    public function getTinNumber()
    {
        return $this->TinNumber;
    }

    /**
     * @param string $TinNumber
     * @return Tin
     */
    public function withTinNumber($TinNumber)
    {
        $new = clone $this;
        $new->TinNumber = $TinNumber;

        return $new;
    }


}

