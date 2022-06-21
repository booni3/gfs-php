<?php

namespace Booni3\GFS\Type;

class ShipRequest
{

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpecification;

    /**
     * @var \Booni3\GFS\Type\RequestedShipment
     */
    private $Shipment;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return \Booni3\GFS\Type\PrintSpecification
     */
    public function getPrintSpecification()
    {
        return $this->PrintSpecification;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSpecification $PrintSpecification
     * @return ShipRequest
     */
    public function withPrintSpecification($PrintSpecification)
    {
        $new = clone $this;
        $new->PrintSpecification = $PrintSpecification;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\RequestedShipment
     */
    public function getShipment()
    {
        return $this->Shipment;
    }

    /**
     * @param \Booni3\GFS\Type\RequestedShipment $Shipment
     * @return ShipRequest
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

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
     * @return ShipRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

