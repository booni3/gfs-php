<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ImportGoodsRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ImportGoodsRequest
     */
    private $ImportGoodsRequest;

    /**
     * @var \Booni3\GFS\Type\DimCommodity
     */
    private $ImportGoods;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ImportGoodsRequest $ImportGoodsRequest
     * @var \Booni3\GFS\Type\DimCommodity $ImportGoods
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     */
    public function __construct($ImportGoodsRequest, $ImportGoods, $AuthenticationDetails)
    {
        $this->ImportGoodsRequest = $ImportGoodsRequest;
        $this->ImportGoods = $ImportGoods;
        $this->AuthenticationDetails = $AuthenticationDetails;
    }

    /**
     * @return \Booni3\GFS\Type\ImportGoodsRequest
     */
    public function getImportGoodsRequest()
    {
        return $this->ImportGoodsRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ImportGoodsRequest $ImportGoodsRequest
     * @return ImportGoodsRequest
     */
    public function withImportGoodsRequest($ImportGoodsRequest)
    {
        $new = clone $this;
        $new->ImportGoodsRequest = $ImportGoodsRequest;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DimCommodity
     */
    public function getImportGoods()
    {
        return $this->ImportGoods;
    }

    /**
     * @param \Booni3\GFS\Type\DimCommodity $ImportGoods
     * @return ImportGoodsRequest
     */
    public function withImportGoods($ImportGoods)
    {
        $new = clone $this;
        $new->ImportGoods = $ImportGoods;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ImportGoodsRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

