<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UploadShipmentsRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $UploadShipmentsRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\AuthenticationDetails $UploadShipmentsRequest
     */
    public function __construct($UploadShipmentsRequest)
    {
        $this->UploadShipmentsRequest = $UploadShipmentsRequest;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getUploadShipmentsRequest()
    {
        return $this->UploadShipmentsRequest;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $UploadShipmentsRequest
     * @return UploadShipmentsRequest
     */
    public function withUploadShipmentsRequest($UploadShipmentsRequest)
    {
        $new = clone $this;
        $new->UploadShipmentsRequest = $UploadShipmentsRequest;

        return $new;
    }


}

