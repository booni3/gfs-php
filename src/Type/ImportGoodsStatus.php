<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ImportGoodsStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $ImportGoodsResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getImportGoodsResult()
    {
        return $this->ImportGoodsResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $ImportGoodsResult
     * @return ImportGoodsStatus
     */
    public function withImportGoodsResult($ImportGoodsResult)
    {
        $new = clone $this;
        $new->ImportGoodsResult = $ImportGoodsResult;

        return $new;
    }


}

