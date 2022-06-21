<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CheckUpdatesRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\CheckUpdatesRequest
     */
    private $CheckUpdatesRequest;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var bool
     */
    private $StartUpdates;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\CheckUpdatesRequest $CheckUpdatesRequest
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @var bool $StartUpdates
     */
    public function __construct($CheckUpdatesRequest, $AuthenticationDetails, $StartUpdates)
    {
        $this->CheckUpdatesRequest = $CheckUpdatesRequest;
        $this->AuthenticationDetails = $AuthenticationDetails;
        $this->StartUpdates = $StartUpdates;
    }

    /**
     * @return \Booni3\GFS\Type\CheckUpdatesRequest
     */
    public function getCheckUpdatesRequest()
    {
        return $this->CheckUpdatesRequest;
    }

    /**
     * @param \Booni3\GFS\Type\CheckUpdatesRequest $CheckUpdatesRequest
     * @return CheckUpdatesRequest
     */
    public function withCheckUpdatesRequest($CheckUpdatesRequest)
    {
        $new = clone $this;
        $new->CheckUpdatesRequest = $CheckUpdatesRequest;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return CheckUpdatesRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return bool
     */
    public function getStartUpdates()
    {
        return $this->StartUpdates;
    }

    /**
     * @param bool $StartUpdates
     * @return CheckUpdatesRequest
     */
    public function withStartUpdates($StartUpdates)
    {
        $new = clone $this;
        $new->StartUpdates = $StartUpdates;

        return $new;
    }


}

