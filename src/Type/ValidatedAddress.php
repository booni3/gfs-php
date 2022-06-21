<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidatedAddress implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $ValidateAddressResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getValidateAddressResult()
    {
        return $this->ValidateAddressResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $ValidateAddressResult
     * @return ValidatedAddress
     */
    public function withValidateAddressResult($ValidateAddressResult)
    {
        $new = clone $this;
        $new->ValidateAddressResult = $ValidateAddressResult;

        return $new;
    }


}

