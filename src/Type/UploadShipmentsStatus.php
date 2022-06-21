<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UploadShipmentsStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $UploadShipmentsResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getUploadShipmentsResult()
    {
        return $this->UploadShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $UploadShipmentsResult
     * @return UploadShipmentsStatus
     */
    public function withUploadShipmentsResult($UploadShipmentsResult)
    {
        $new = clone $this;
        $new->UploadShipmentsResult = $UploadShipmentsResult;

        return $new;
    }


}

