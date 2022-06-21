<?php

namespace Booni3\GFS\Type;

class SearchPartyResponse
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $FoundAddresses;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return SearchPartyResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getFoundAddresses()
    {
        return $this->FoundAddresses;
    }

    /**
     * @param \Booni3\GFS\Type\Party $FoundAddresses
     * @return SearchPartyResponse
     */
    public function withFoundAddresses($FoundAddresses)
    {
        $new = clone $this;
        $new->FoundAddresses = $FoundAddresses;

        return $new;
    }


}

