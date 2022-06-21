<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AuthDetails implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $authDetails;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\AuthenticationDetails $authDetails
     */
    public function __construct($authDetails)
    {
        $this->authDetails = $authDetails;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthDetails()
    {
        return $this->authDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $authDetails
     * @return AuthDetails
     */
    public function withAuthDetails($authDetails)
    {
        $new = clone $this;
        $new->authDetails = $authDetails;

        return $new;
    }


}

