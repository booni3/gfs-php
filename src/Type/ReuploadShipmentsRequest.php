<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ReuploadShipmentsRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ReuploadShipmentsRequest
     */
    private $ReuploadShipmentsRequest;

    /**
     * @var \DateTimeInterface
     */
    private $DateFrom;

    /**
     * @var \DateTimeInterface
     */
    private $DateTo;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ReuploadShipmentsRequest $ReuploadShipmentsRequest
     * @var \DateTimeInterface $DateFrom
     * @var \DateTimeInterface $DateTo
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     */
    public function __construct($ReuploadShipmentsRequest, $DateFrom, $DateTo, $AuthenticationDetails)
    {
        $this->ReuploadShipmentsRequest = $ReuploadShipmentsRequest;
        $this->DateFrom = $DateFrom;
        $this->DateTo = $DateTo;
        $this->AuthenticationDetails = $AuthenticationDetails;
    }

    /**
     * @return \Booni3\GFS\Type\ReuploadShipmentsRequest
     */
    public function getReuploadShipmentsRequest()
    {
        return $this->ReuploadShipmentsRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ReuploadShipmentsRequest $ReuploadShipmentsRequest
     * @return ReuploadShipmentsRequest
     */
    public function withReuploadShipmentsRequest($ReuploadShipmentsRequest)
    {
        $new = clone $this;
        $new->ReuploadShipmentsRequest = $ReuploadShipmentsRequest;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFrom()
    {
        return $this->DateFrom;
    }

    /**
     * @param \DateTimeInterface $DateFrom
     * @return ReuploadShipmentsRequest
     */
    public function withDateFrom($DateFrom)
    {
        $new = clone $this;
        $new->DateFrom = $DateFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateTo()
    {
        return $this->DateTo;
    }

    /**
     * @param \DateTimeInterface $DateTo
     * @return ReuploadShipmentsRequest
     */
    public function withDateTo($DateTo)
    {
        $new = clone $this;
        $new->DateTo = $DateTo;

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
     * @return ReuploadShipmentsRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

