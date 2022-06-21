<?php

namespace Booni3\GFS\Type;

class HoldAtLocationDetails
{

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $Address;

    /**
     * @var string
     */
    private $Phone;

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param \Booni3\GFS\Type\Address $Address
     * @return HoldAtLocationDetails
     */
    public function withAddress($Address)
    {
        $new = clone $this;
        $new->Address = $Address;

        return $new;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }

    /**
     * @param string $Phone
     * @return HoldAtLocationDetails
     */
    public function withPhone($Phone)
    {
        $new = clone $this;
        $new->Phone = $Phone;

        return $new;
    }


}

