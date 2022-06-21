<?php

namespace Booni3\GFS\Type;

class DailyShipRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @var \DateTimeInterface
     */
    private $ShipDate;

    /**
     * @var int
     */
    private $SiteId;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ShipmentState;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return DailyShipRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }

    /**
     * @param \DateTimeInterface $ShipDate
     * @return DailyShipRequest
     */
    public function withShipDate($ShipDate)
    {
        $new = clone $this;
        $new->ShipDate = $ShipDate;

        return $new;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param int $SiteId
     * @return DailyShipRequest
     */
    public function withSiteId($SiteId)
    {
        $new = clone $this;
        $new->SiteId = $SiteId;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return DailyShipRequest
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipmentState()
    {
        return $this->ShipmentState;
    }

    /**
     * @param string $ShipmentState
     * @return DailyShipRequest
     */
    public function withShipmentState($ShipmentState)
    {
        $new = clone $this;
        $new->ShipmentState = $ShipmentState;

        return $new;
    }


}

