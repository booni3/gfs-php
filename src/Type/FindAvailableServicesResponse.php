<?php

namespace Booni3\GFS\Type;

class FindAvailableServicesResponse
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\FoundAvailableService
     */
    private $FoundAvailableServices;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return FindAvailableServicesResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\FoundAvailableService
     */
    public function getFoundAvailableServices()
    {
        return $this->FoundAvailableServices;
    }

    /**
     * @param \Booni3\GFS\Type\FoundAvailableService $FoundAvailableServices
     * @return FindAvailableServicesResponse
     */
    public function withFoundAvailableServices($FoundAvailableServices)
    {
        $new = clone $this;
        $new->FoundAvailableServices = $FoundAvailableServices;

        return $new;
    }


}

