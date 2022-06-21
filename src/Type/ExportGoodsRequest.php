<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExportGoodsRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $ExportGoodsRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\AuthenticationDetails $ExportGoodsRequest
     */
    public function __construct($ExportGoodsRequest)
    {
        $this->ExportGoodsRequest = $ExportGoodsRequest;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getExportGoodsRequest()
    {
        return $this->ExportGoodsRequest;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $ExportGoodsRequest
     * @return ExportGoodsRequest
     */
    public function withExportGoodsRequest($ExportGoodsRequest)
    {
        $new = clone $this;
        $new->ExportGoodsRequest = $ExportGoodsRequest;

        return $new;
    }


}

