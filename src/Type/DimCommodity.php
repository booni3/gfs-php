<?php

namespace Booni3\GFS\Type;

class DimCommodity
{

    /**
     * @var \Booni3\GFS\Type\Commodity
     */
    private $Commodity;

    /**
     * @var \Booni3\GFS\Type\Dimensions
     */
    private $Dimensions;

    /**
     * @return \Booni3\GFS\Type\Commodity
     */
    public function getCommodity()
    {
        return $this->Commodity;
    }

    /**
     * @param \Booni3\GFS\Type\Commodity $Commodity
     * @return DimCommodity
     */
    public function withCommodity($Commodity)
    {
        $new = clone $this;
        $new->Commodity = $Commodity;

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
     * @return DimCommodity
     */
    public function withDimensions($Dimensions)
    {
        $new = clone $this;
        $new->Dimensions = $Dimensions;

        return $new;
    }


}

