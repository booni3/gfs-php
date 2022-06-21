<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class MachinesRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\FindMachinesRequest
     */
    private $MachinesRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\FindMachinesRequest $MachinesRequest
     */
    public function __construct($MachinesRequest)
    {
        $this->MachinesRequest = $MachinesRequest;
    }

    /**
     * @return \Booni3\GFS\Type\FindMachinesRequest
     */
    public function getMachinesRequest()
    {
        return $this->MachinesRequest;
    }

    /**
     * @param \Booni3\GFS\Type\FindMachinesRequest $MachinesRequest
     * @return MachinesRequest
     */
    public function withMachinesRequest($MachinesRequest)
    {
        $new = clone $this;
        $new->MachinesRequest = $MachinesRequest;

        return $new;
    }


}

