<?php

namespace Booni3\GFS\Type;

class StatusResponse
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ResponseDetails;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return StatusResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

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
     * @return StatusResponse
     */
    public function withResponseDetails($ResponseDetails)
    {
        $new = clone $this;
        $new->ResponseDetails = $ResponseDetails;

        return $new;
    }


}

