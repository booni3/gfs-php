<?php

namespace Booni3\GFS\Type;

class DeleteShipment
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
     * @return string
     */
    public function getConsignmentNo()
    {
        return $this->ConsignmentNo;
    }

    /**
     * @param string $ConsignmentNo
     * @return DeleteShipment
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
     * @return DeleteShipment
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }


}

