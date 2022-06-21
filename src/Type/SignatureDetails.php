<?php

namespace Booni3\GFS\Type;

class SignatureDetails
{

    /**
     * @var string
     */
    private $SignType;

    /**
     * @var string
     */
    private $Pin;

    /**
     * @return string
     */
    public function getSignType()
    {
        return $this->SignType;
    }

    /**
     * @param string $SignType
     * @return SignatureDetails
     */
    public function withSignType($SignType)
    {
        $new = clone $this;
        $new->SignType = $SignType;

        return $new;
    }

    /**
     * @return string
     */
    public function getPin()
    {
        return $this->Pin;
    }

    /**
     * @param string $Pin
     * @return SignatureDetails
     */
    public function withPin($Pin)
    {
        $new = clone $this;
        $new->Pin = $Pin;

        return $new;
    }


}

