<?php

namespace Booni3\GFS\Type;

class ShipToGroupRequest
{

    /**
     * @var \Booni3\GFS\Type\Recipient
     */
    private $Recipients;

    /**
     * @var \Booni3\GFS\Type\RequestedShipmentDetails
     */
    private $Shipment;

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpec;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return \Booni3\GFS\Type\Recipient
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }

    /**
     * @param \Booni3\GFS\Type\Recipient $Recipients
     * @return ShipToGroupRequest
     */
    public function withRecipients($Recipients)
    {
        $new = clone $this;
        $new->Recipients = $Recipients;

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
     * @return ShipToGroupRequest
     */
    public function withShipment($Shipment)
    {
        $new = clone $this;
        $new->Shipment = $Shipment;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintSpecification
     */
    public function getPrintSpec()
    {
        return $this->PrintSpec;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSpecification $PrintSpec
     * @return ShipToGroupRequest
     */
    public function withPrintSpec($PrintSpec)
    {
        $new = clone $this;
        $new->PrintSpec = $PrintSpec;

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
     * @return ShipToGroupRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

