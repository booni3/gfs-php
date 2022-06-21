<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FoundAddress implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidateUKAddressResponse
     */
    private $CheckUKAddressResult;

    /**
     * @return \Booni3\GFS\Type\ValidateUKAddressResponse
     */
    public function getCheckUKAddressResult()
    {
        return $this->CheckUKAddressResult;
    }

    /**
     * @param \Booni3\GFS\Type\ValidateUKAddressResponse $CheckUKAddressResult
     * @return FoundAddress
     */
    public function withCheckUKAddressResult($CheckUKAddressResult)
    {
        $new = clone $this;
        $new->CheckUKAddressResult = $CheckUKAddressResult;

        return $new;
    }


}

