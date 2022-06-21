<?php

namespace Booni3\GFS\Type;

class CommitShipGroupRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \Booni3\GFS\Type\CarrierShipGroup
     */
    private $ShipGroups;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return CommitShipGroupRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierShipGroup
     */
    public function getShipGroups()
    {
        return $this->ShipGroups;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierShipGroup $ShipGroups
     * @return CommitShipGroupRequest
     */
    public function withShipGroups($ShipGroups)
    {
        $new = clone $this;
        $new->ShipGroups = $ShipGroups;

        return $new;
    }


}

