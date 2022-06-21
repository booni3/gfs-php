<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedShipment implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ShipRequest
     */
    private $ShipRequest;

    /**
     * @var \Booni3\GFS\Type\Recipient
     */
    private $Recipient;

    /**
     * @var \Booni3\GFS\Type\RequestedShipmentDetails
     */
    private $Shipment;

    /**
     * @var \Booni3\GFS\Type\PayPoint
     */
    private $PayPoint;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ShipRequest $ShipRequest
     * @var \Booni3\GFS\Type\Recipient $Recipient
     * @var \Booni3\GFS\Type\RequestedShipmentDetails $Shipment
     * @var \Booni3\GFS\Type\PayPoint $PayPoint
     */
    public function __construct($ShipRequest, $Recipient, $Shipment, $PayPoint)
    {
        $this->ShipRequest = $ShipRequest;
        $this->Recipient = $Recipient;
        $this->Shipment = $Shipment;
        $this->PayPoint = $PayPoint;
    }

    /**
     * @return \Booni3\GFS\Type\ShipRequest
     */
    public function getShipRequest()
    {
        return $this->ShipRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ShipRequest $ShipRequest
     * @return RequestedShipment
     */
    public function withShipRequest($ShipRequest)
    {
        $new = clone $this;
        $new->ShipRequest = $ShipRequest;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Recipient
     */
    public function getRecipient()
    {
        return $this->Recipient;
    }

    /**
     * @param \Booni3\GFS\Type\Recipient $Recipient
     * @return RequestedShipment
     */
    public function withRecipient($Recipient)
    {
        $new = clone $this;
        $new->Recipient = $Recipient;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedShipmentDetails
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedShipmentDetails $Shipment
     * @return RequestedShipment
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PayPoint
     */
    public function getPayPoint()
    {
        return $this->PayPoint;
    }

    /**
     * @param \Booni3\GFS\Type\PayPoint $PayPoint
     * @return RequestedShipment
     */
    public function withPayPoint($PayPoint)
    {
        $new = clone $this;
        $new->PayPoint = $PayPoint;

        return $new;
    }


}

