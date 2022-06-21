<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExportGoodsStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ExportGoodsResponse
     */
    private $ExportGoodsResult;

    /**
     * @return \Booni3\GFS\Type\ExportGoodsResponse
     */
    public function getExportGoodsResult()
    {
        return $this->ExportGoodsResult;
    }

    /**
     * @param \Booni3\GFS\Type\ExportGoodsResponse $ExportGoodsResult
     * @return ExportGoodsStatus
     */
    public function withExportGoodsResult($ExportGoodsResult)
    {
        $new = clone $this;
        $new->ExportGoodsResult = $ExportGoodsResult;

        return $new;
    }


}

