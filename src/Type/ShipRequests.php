<?php

namespace Booni3\GFS\Type;

class ShipRequests
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\ArrayOfRequestedShipment
     */
    private $Shipments;

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpec;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ShipRequests
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfRequestedShipment
     */
    public function getShipments()
    {
        return $this->Shipments;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfRequestedShipment $Shipments
     * @return ShipRequests
     */
    public function withShipments($Shipments)
    {
        $new = clone $this;
        $new->Shipments = $Shipments;

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
     * @return ShipRequests
     */
    public function withPrintSpec($PrintSpec)
    {
        $new = clone $this;
        $new->PrintSpec = $PrintSpec;

        return $new;
    }


}

