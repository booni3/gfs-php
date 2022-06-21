<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class InPostMachines implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\InPostMachines
     */
    private $FindInPostMachinesResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\InPostMachine
     */
    private $MachineDetails;

    /**
     * @return \Booni3\GFS\Type\InPostMachines
     */
    public function getFindInPostMachinesResult()
    {
        return $this->FindInPostMachinesResult;
    }

    /**
     * @param \Booni3\GFS\Type\InPostMachines $FindInPostMachinesResult
     * @return InPostMachines
     */
    public function withFindInPostMachinesResult($FindInPostMachinesResult)
    {
        $new = clone $this;
        $new->FindInPostMachinesResult = $FindInPostMachinesResult;

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
     * @return InPostMachines
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\InPostMachine
     */
    public function getMachineDetails()
    {
        return $this->MachineDetails;
    }

    /**
     * @param \Booni3\GFS\Type\InPostMachine $MachineDetails
     * @return InPostMachines
     */
    public function withMachineDetails($MachineDetails)
    {
        $new = clone $this;
        $new->MachineDetails = $MachineDetails;

        return $new;
    }


}

