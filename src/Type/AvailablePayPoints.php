<?php

namespace Booni3\GFS\Type;

class AvailablePayPoints
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\AvailableAgent
     */
    private $FoundAgents;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return AvailablePayPoints
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AvailableAgent
     */
    public function getFoundAgents()
    {
        return $this->FoundAgents;
    }

    /**
     * @param \Booni3\GFS\Type\AvailableAgent $FoundAgents
     * @return AvailablePayPoints
     */
    public function withFoundAgents($FoundAgents)
    {
        $new = clone $this;
        $new->FoundAgents = $FoundAgents;

        return $new;
    }


}

