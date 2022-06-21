<?php

namespace Booni3\GFS\Type;

class CAShipDetails
{

    /**
     * @var int
     */
    private $OrderId;

    /**
     * @var string
     */
    private $Account;

    /**
     * @var string
     */
    private $OrderIdent;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->OrderId;
    }

    /**
     * @param int $OrderId
     * @return CAShipDetails
     */
    public function withOrderId($OrderId)
    {
        $new = clone $this;
        $new->OrderId = $OrderId;

        return $new;
    }

    /**
     * @return string
     */
    public function getAccount()
    {
        return $this->Account;
    }

    /**
     * @param string $Account
     * @return CAShipDetails
     */
    public function withAccount($Account)
    {
        $new = clone $this;
        $new->Account = $Account;

        return $new;
    }

    /**
     * @return string
     */
    public function getOrderIdent()
    {
        return $this->OrderIdent;
    }

    /**
     * @param string $OrderIdent
     * @return CAShipDetails
     */
    public function withOrderIdent($OrderIdent)
    {
        $new = clone $this;
        $new->OrderIdent = $OrderIdent;

        return $new;
    }


}

