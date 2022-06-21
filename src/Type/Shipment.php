<?php

namespace Booni3\GFS\Type;

class Shipment
{

    /**
     * @var string
     */
    private $OrderId;

    /**
     * @var string
     */
    private $OrderIdent;

    /**
     * @var \Booni3\GFS\Type\RequestedShipment
     */
    private $CAOrder;

    /**
     * @var \Booni3\GFS\Type\ProcessedShipment
     */
    private $CAShipment;

    /**
     * @return string
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param string $OrderId
     * @return Shipment
     */
    public function withOrderId($OrderId)
    {
        $new = clone $this;
        $new->OrderId = $OrderId;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderIdent()
    {
        return $this->OrderIdent;
    }

    /**
     * @param string $OrderIdent
     * @return Shipment
     */
    public function withOrderIdent($OrderIdent)
    {
        $new = clone $this;
        $new->OrderIdent = $OrderIdent;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedShipment
     */
    public function getCAOrder()
    {
        return $this->CAOrder;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedShipment $CAOrder
     * @return Shipment
     */
    public function withCAOrder($CAOrder)
    {
        $new = clone $this;
        $new->CAOrder = $CAOrder;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ProcessedShipment
     */
    public function getCAShipment()
    {
        return $this->CAShipment;
    }

    /**
     * @param \Booni3\GFS\Type\ProcessedShipment $CAShipment
     * @return Shipment
     */
    public function withCAShipment($CAShipment)
    {
        $new = clone $this;
        $new->CAShipment = $CAShipment;

        return $new;
    }


}

