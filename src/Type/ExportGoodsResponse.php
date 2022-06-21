<?php

namespace Booni3\GFS\Type;

class ExportGoodsResponse
{

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ResponseDetails;

    /**
     * @var \Booni3\GFS\Type\DimCommodity
     */
    private $Goods;

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $ResponseDetails
     * @return ExportGoodsResponse
     */
    public function withResponseDetails($ResponseDetails)
    {
        $new = clone $this;
        $new->ResponseDetails = $ResponseDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DimCommodity
     */
    public function getGoods()
    {
        return $this->Goods;
    }

    /**
     * @param \Booni3\GFS\Type\DimCommodity $Goods
     * @return ExportGoodsResponse
     */
    public function withGoods($Goods)
    {
        $new = clone $this;
        $new->Goods = $Goods;

        return $new;
    }


}

