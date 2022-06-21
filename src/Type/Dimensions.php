<?php

namespace Booni3\GFS\Type;

class Dimensions
{

    /**
     * @var int
     */
    private $PackLength;

    /**
     * @var int
     */
    private $PackHeight;

    /**
     * @var int
     */
    private $PackWidth;

    /**
     * @return int
     */
    public function getPackLength()
    {
        return $this->PackLength;
    }

    /**
     * @param int $PackLength
     * @return Dimensions
     */
    public function withPackLength($PackLength)
    {
        $new = clone $this;
        $new->PackLength = $PackLength;

        return $new;
    }

    /**
     * @return int
     */
    public function getPackHeight()
    {
        return $this->PackHeight;
    }

    /**
     * @param int $PackHeight
     * @return Dimensions
     */
    public function withPackHeight($PackHeight)
    {
        $new = clone $this;
        $new->PackHeight = $PackHeight;

        return $new;
    }

    /**
     * @return int
     */
    public function getPackWidth()
    {
        return $this->PackWidth;
    }

    /**
     * @param int $PackWidth
     * @return Dimensions
     */
    public function withPackWidth($PackWidth)
    {
        $new = clone $this;
        $new->PackWidth = $PackWidth;

        return $new;
    }


}

