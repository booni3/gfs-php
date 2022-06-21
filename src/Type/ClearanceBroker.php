<?php

namespace Booni3\GFS\Type;

class ClearanceBroker
{

    /**
     * @var string
     */
    private $BrokerAccount;

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $Broker;

    /**
     * @var string
     */
    private $BrokerageType;

    /**
     * @return string
     */
    public function getBrokerAccount()
    {
        return $this->BrokerAccount;
    }

    /**
     * @param string $BrokerAccount
     * @return ClearanceBroker
     */
    public function withBrokerAccount($BrokerAccount)
    {
        $new = clone $this;
        $new->BrokerAccount = $BrokerAccount;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getBroker()
    {
        return $this->Broker;
    }

    /**
     * @param \Booni3\GFS\Type\Party $Broker
     * @return ClearanceBroker
     */
    public function withBroker($Broker)
    {
        $new = clone $this;
        $new->Broker = $Broker;

        return $new;
    }

    /**
     * @return string
     */
    public function getBrokerageType()
    {
        return $this->BrokerageType;
    }

    /**
     * @param string $BrokerageType
     * @return ClearanceBroker
     */
    public function withBrokerageType($BrokerageType)
    {
        $new = clone $this;
        $new->BrokerageType = $BrokerageType;

        return $new;
    }


}

