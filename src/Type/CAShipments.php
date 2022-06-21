<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CAShipments implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\CAReply
     */
    private $GetCAOrdersResult;

    /**
     * @return \Booni3\GFS\Type\CAReply
     */
    public function getGetCAOrdersResult()
    {
        return $this->GetCAOrdersResult;
    }

    /**
     * @param \Booni3\GFS\Type\CAReply $GetCAOrdersResult
     * @return CAShipments
     */
    public function withGetCAOrdersResult($GetCAOrdersResult)
    {
        $new = clone $this;
        $new->GetCAOrdersResult = $GetCAOrdersResult;

        return $new;
    }


}

