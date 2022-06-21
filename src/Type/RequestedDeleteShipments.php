<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedDeleteShipments implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\RequestedDeleteShipments
     */
    private $Shipments;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\DeleteShipment
     */
    private $RequestedShipments;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\RequestedDeleteShipments $Shipments
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @var \Booni3\GFS\Type\DeleteShipment $RequestedShipments
     */
    public function __construct($Shipments, $AuthenticationDetails, $RequestedShipments)
    {
        $this->Shipments = $Shipments;
        $this->AuthenticationDetails = $AuthenticationDetails;
        $this->RequestedShipments = $RequestedShipments;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedDeleteShipments
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedDeleteShipments $Shipments
     * @return RequestedDeleteShipments
     */
    public function withShipments($Shipments)
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

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
     * @return RequestedDeleteShipments
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\DeleteShipment
     */
    public function getRequestedShipments()
    {
        return $this->RequestedShipments;
    }

    /**
     * @param \Booni3\GFS\Type\DeleteShipment $RequestedShipments
     * @return RequestedDeleteShipments
     */
    public function withRequestedShipments($RequestedShipments)
    {
        $new = clone $this;
        $new->RequestedShipments = $RequestedShipments;

        return $new;
    }


}

