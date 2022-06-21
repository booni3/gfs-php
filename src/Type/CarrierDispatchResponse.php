<?php

namespace Booni3\GFS\Type;

class CarrierDispatchResponse
{

    /**
     * @var string
     */
    private $Location;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var string
     */
    private $DispatchNumber;

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->Location;
    }

    /**
     * @param string $Location
     * @return CarrierDispatchResponse
     */
    public function withLocation($Location)
    {
        $new = clone $this;
        $new->Location = $Location;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return CarrierDispatchResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getDispatchNumber()
    {
        return $this->DispatchNumber;
    }

    /**
     * @param string $DispatchNumber
     * @return CarrierDispatchResponse
     */
    public function withDispatchNumber($DispatchNumber)
    {
        $new = clone $this;
        $new->DispatchNumber = $DispatchNumber;

        return $new;
    }


}

