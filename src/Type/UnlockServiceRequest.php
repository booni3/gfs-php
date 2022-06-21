<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UnlockServiceRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $UnlockServiceRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\AuthenticationDetails $UnlockServiceRequest
     */
    public function __construct($UnlockServiceRequest)
    {
        $this->UnlockServiceRequest = $UnlockServiceRequest;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getUnlockServiceRequest()
    {
        return $this->UnlockServiceRequest;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $UnlockServiceRequest
     * @return UnlockServiceRequest
     */
    public function withUnlockServiceRequest($UnlockServiceRequest)
    {
        $new = clone $this;
        $new->UnlockServiceRequest = $UnlockServiceRequest;

        return $new;
    }


}

