<?php

namespace Booni3\GFS\Type;

class ShipDocument
{

    /**
     * @var string
     */
    private $shipFormatType;

    /**
     * @var string
     */
    private $shipType;

    /**
     * @var string
     */
    private $docImage;

    /**
     * @return string
     */
    public function getShipFormatType()
    {
        return $this->shipFormatType;
    }

    /**
     * @param string $shipFormatType
     * @return ShipDocument
     */
    public function withShipFormatType($shipFormatType)
    {
        $new = clone $this;
        $new->shipFormatType = $shipFormatType;

        return $new;
    }

    /**
     * @return string
     */
    public function getShipType()
    {
        return $this->shipType;
    }

    /**
     * @param string $shipType
     * @return ShipDocument
     */
    public function withShipType($shipType)
    {
        $new = clone $this;
        $new->shipType = $shipType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDocImage()
    {
        return $this->docImage;
    }

    /**
     * @param string $docImage
     * @return ShipDocument
     */
    public function withDocImage($docImage)
    {
        $new = clone $this;
        $new->docImage = $docImage;

        return $new;
    }


}

