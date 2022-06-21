<?php

namespace Booni3\GFS\Type;

class ProcessedDeleteShipment
{

    /**
     * @var string
     */
    private $ConsignmentNo;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $Status;

    /**
     * @return string
     */
    public function getConsignmentNo()
    {
        return $this->ConsignmentNo;
    }

    /**
     * @param string $ConsignmentNo
     * @return ProcessedDeleteShipment
     */
    public function withConsignmentNo($ConsignmentNo)
    {
        $new = clone $this;
        $new->ConsignmentNo = $ConsignmentNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return ProcessedDeleteShipment
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $Status
     * @return ProcessedDeleteShipment
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }


}

