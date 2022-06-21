<?php

namespace Booni3\GFS\Type;

class ArrayOfProcessedShipment
{

    /**
     * @var \Booni3\GFS\Type\ProcessedShipment
     */
    private $ProcessedShipment;

    /**
     * @return \Booni3\GFS\Type\ProcessedShipment
     */
    public function getProcessedShipment()
    {
        return $this->ProcessedShipment;
    }

    /**
     * @param \Booni3\GFS\Type\ProcessedShipment $ProcessedShipment
     * @return ArrayOfProcessedShipment
     */
    public function withProcessedShipment($ProcessedShipment)
    {
        $new = clone $this;
        $new->ProcessedShipment = $ProcessedShipment;

        return $new;
    }


}

