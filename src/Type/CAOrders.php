<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CAOrders implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CARequest
     */
    private $CARequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CARequest $CARequest
     */
    public function __construct($CARequest)
    {
        $this->CARequest = $CARequest;
    }

    /**
     * @return \Booni3\GFS\Type\CARequest
     */
    public function getCARequest()
    {
        return $this->CARequest;
    }

    /**
     * @param \Booni3\GFS\Type\CARequest $CARequest
     * @return CAOrders
     */
    public function withCARequest($CARequest)
    {
        $new = clone $this;
        $new->CARequest = $CARequest;

        return $new;
    }


}

