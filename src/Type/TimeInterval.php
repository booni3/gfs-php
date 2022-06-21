<?php

namespace Booni3\GFS\Type;

class TimeInterval
{

    /**
     * @var string
     */
    private $TimeFrom;

    /**
     * @var string
     */
    private $TimeTo;

    /**
     * @return string
     */
    public function getTimeFrom()
    {
        return $this->TimeFrom;
    }

    /**
     * @param string $TimeFrom
     * @return TimeInterval
     */
    public function withTimeFrom($TimeFrom)
    {
        $new = clone $this;
        $new->TimeFrom = $TimeFrom;

        return $new;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
        return $this->TimeTo;
    }

    /**
     * @param string $TimeTo
     * @return TimeInterval
     */
    public function withTimeTo($TimeTo)
    {
        $new = clone $this;
        $new->TimeTo = $TimeTo;

        return $new;
    }


}

