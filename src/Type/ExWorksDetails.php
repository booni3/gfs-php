<?php

namespace Booni3\GFS\Type;

class ExWorksDetails
{

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $ExWorksAmount;

    /**
     * @var string
     */
    private $ExWorksAccount;

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getExWorksAmount()
    {
        return $this->ExWorksAmount;
    }

    /**
     * @param \Booni3\GFS\Type\Money $ExWorksAmount
     * @return ExWorksDetails
     */
    public function withExWorksAmount($ExWorksAmount)
    {
        $new = clone $this;
        $new->ExWorksAmount = $ExWorksAmount;

        return $new;
    }

    /**
     * @return string
     */
    public function getExWorksAccount()
    {
        return $this->ExWorksAccount;
    }

    /**
     * @param string $ExWorksAccount
     * @return ExWorksDetails
     */
    public function withExWorksAccount($ExWorksAccount)
    {
        $new = clone $this;
        $new->ExWorksAccount = $ExWorksAccount;

        return $new;
    }


}

