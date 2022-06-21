<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ReuploadShipmentsStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $ReuploadShipmentsResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getReuploadShipmentsResult()
    {
        return $this->ReuploadShipmentsResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $ReuploadShipmentsResult
     * @return ReuploadShipmentsStatus
     */
    public function withReuploadShipmentsResult($ReuploadShipmentsResult)
    {
        $new = clone $this;
        $new->ReuploadShipmentsResult = $ReuploadShipmentsResult;

        return $new;
    }


}

