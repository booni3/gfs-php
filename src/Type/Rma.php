<?php

namespace Booni3\GFS\Type;

class Rma
{

    /**
     * @var string
     */
    private $RmaNumber;

    /**
     * @var string
     */
    private $Reason;

    /**
     * @return string
     */
    public function getRmaNumber()
    {
        return $this->RmaNumber;
    }

    /**
     * @param string $RmaNumber
     * @return Rma
     */
    public function withRmaNumber($RmaNumber)
    {
        $new = clone $this;
        $new->RmaNumber = $RmaNumber;

        return $new;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->Reason;
    }

    /**
     * @param string $Reason
     * @return Rma
     */
    public function withReason($Reason)
    {
        $new = clone $this;
        $new->Reason = $Reason;

        return $new;
    }


}

