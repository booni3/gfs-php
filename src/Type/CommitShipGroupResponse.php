<?php

namespace Booni3\GFS\Type;

class CommitShipGroupResponse
{

    /**
     * @var \DateTimeInterface
     */
    private $CommitTime;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\ErrorShipGroup
     */
    private $ErrorShipGroups;

    /**
     * @return \DateTimeInterface
     */
    public function getCommitTime()
    {
        return $this->CommitTime;
    }

    /**
     * @param \DateTimeInterface $CommitTime
     * @return CommitShipGroupResponse
     */
    public function withCommitTime($CommitTime)
    {
        $new = clone $this;
        $new->CommitTime = $CommitTime;

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
     * @return CommitShipGroupResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ErrorShipGroup
     */
    public function getErrorShipGroups()
    {
        return $this->ErrorShipGroups;
    }

    /**
     * @param \Booni3\GFS\Type\ErrorShipGroup $ErrorShipGroups
     * @return CommitShipGroupResponse
     */
    public function withErrorShipGroups($ErrorShipGroups)
    {
        $new = clone $this;
        $new->ErrorShipGroups = $ErrorShipGroups;

        return $new;
    }


}

