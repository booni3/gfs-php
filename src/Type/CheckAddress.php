<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckAddress implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidateUKAddressRequest
     */
    private $CheckAddress;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ValidateUKAddressRequest $CheckAddress
     */
    public function __construct($CheckAddress)
    {
        $this->CheckAddress = $CheckAddress;
    }

    /**
     * @return \Booni3\GFS\Type\ValidateUKAddressRequest
     */
    public function getCheckAddress()
    {
        return $this->CheckAddress;
    }

    /**
     * @param \Booni3\GFS\Type\ValidateUKAddressRequest $CheckAddress
     * @return CheckAddress
     */
    public function withCheckAddress($CheckAddress)
    {
        $new = clone $this;
        $new->CheckAddress = $CheckAddress;

        return $new;
    }


}

