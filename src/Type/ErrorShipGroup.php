<?php

namespace Booni3\GFS\Type;

class ErrorShipGroup
{

    /**
     * @var \Booni3\GFS\Type\CarrierShipGroup
     */
    private $ShipGroup;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ResponseDetails;

    /**
     * @return \Booni3\GFS\Type\CarrierShipGroup
     */
    public function getShipGroup()
    {
        return $this->ShipGroup;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierShipGroup $ShipGroup
     * @return ErrorShipGroup
     */
    public function withShipGroup($ShipGroup)
    {
        $new = clone $this;
        $new->ShipGroup = $ShipGroup;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $ResponseDetails
     * @return ErrorShipGroup
     */
    public function withResponseDetails($ResponseDetails)
    {
        $new = clone $this;
        $new->ResponseDetails = $ResponseDetails;

        return $new;
    }


}

