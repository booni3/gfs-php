<?php

namespace Booni3\GFS\Type;

class FindLocationResponse
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\FoundLocationDetails
     */
    private $FoundLocationDetails;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return FindLocationResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\FoundLocationDetails
     */
    public function getFoundLocationDetails()
    {
        return $this->FoundLocationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\FoundLocationDetails $FoundLocationDetails
     * @return FindLocationResponse
     */
    public function withFoundLocationDetails($FoundLocationDetails)
    {
        $new = clone $this;
        $new->FoundLocationDetails = $FoundLocationDetails;

        return $new;
    }


}

