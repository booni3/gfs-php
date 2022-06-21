<?php

namespace Booni3\GFS\Type;

class CommitShipmentsResponse
{

    /**
     * @var int
     */
    private $CommitShips;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\CarrierDocument
     */
    private $CarrierDocuments;

    /**
     * @return int
     */
    public function getCommitShips()
    {
        return $this->CommitShips;
    }

    /**
     * @param int $CommitShips
     * @return CommitShipmentsResponse
     */
    public function withCommitShips($CommitShips)
    {
        $new = clone $this;
        $new->CommitShips = $CommitShips;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return CommitShipmentsResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierDocument
     */
    public function getCarrierDocuments()
    {
        return $this->CarrierDocuments;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierDocument $CarrierDocuments
     * @return CommitShipmentsResponse
     */
    public function withCarrierDocuments($CarrierDocuments)
    {
        $new = clone $this;
        $new->CarrierDocuments = $CarrierDocuments;

        return $new;
    }


}

