<?php

namespace Booni3\GFS\Type;

class Geocode
{

    /**
     * @var string
     */
    private $Latitude;

    /**
     * @var string
     */
    private $Longitude;

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->Latitude;
    }

    /**
     * @param string $Latitude
     * @return Geocode
     */
    public function withLatitude($Latitude)
    {
        $new = clone $this;
        $new->Latitude = $Latitude;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->Longitude;
    }

    /**
     * @param string $Longitude
     * @return Geocode
     */
    public function withLongitude($Longitude)
    {
        $new = clone $this;
        $new->Longitude = $Longitude;

        return $new;
    }


}

