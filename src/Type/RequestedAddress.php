<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedAddress implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidateAddressRequest
     */
    private $RequestedAddress;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ValidateAddressRequest $RequestedAddress
     */
    public function __construct($RequestedAddress)
    {
        $this->RequestedAddress = $RequestedAddress;
    }

    /**
     * @return \Booni3\GFS\Type\ValidateAddressRequest
     */
    public function getRequestedAddress()
    {
        return $this->RequestedAddress;
    }

    /**
     * @param \Booni3\GFS\Type\ValidateAddressRequest $RequestedAddress
     * @return RequestedAddress
     */
    public function withRequestedAddress($RequestedAddress)
    {
        $new = clone $this;
        $new->RequestedAddress = $RequestedAddress;

        return $new;
    }


}

