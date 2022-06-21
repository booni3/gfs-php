<?php

namespace Booni3\GFS\Type;

class ExpertSuperserviceSection
{

    /**
     * @var bool
     */
    private $Outsize;

    /**
     * @var string
     */
    private $SuperserviceCode;

    /**
     * @return bool
     */
    public function getOutsize()
    {
        return $this->Outsize;
    }

    /**
     * @param bool $Outsize
     * @return ExpertSuperserviceSection
     */
    public function withOutsize($Outsize)
    {
        $new = clone $this;
        $new->Outsize = $Outsize;

        return $new;
    }

    /**
     * @return string
     */
    public function getSuperserviceCode()
    {
        return $this->SuperserviceCode;
    }

    /**
     * @param string $SuperserviceCode
     * @return ExpertSuperserviceSection
     */
    public function withSuperserviceCode($SuperserviceCode)
    {
        $new = clone $this;
        $new->SuperserviceCode = $SuperserviceCode;

        return $new;
    }


}

