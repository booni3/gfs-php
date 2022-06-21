<?php

namespace Booni3\GFS\Type;

class CarrierDocument
{

    /**
     * @var \Booni3\GFS\Type\CarrierServiceGroup
     */
    private $CarrierServiceGroup;

    /**
     * @var \Booni3\GFS\Type\PrintDocument
     */
    private $PrintDocument;

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ResponseDetails;

    /**
     * @return \Booni3\GFS\Type\CarrierServiceGroup
     */
    public function getCarrierServiceGroup()
    {
        return $this->CarrierServiceGroup;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServiceGroup $CarrierServiceGroup
     * @return CarrierDocument
     */
    public function withCarrierServiceGroup($CarrierServiceGroup)
    {
        $new = clone $this;
        $new->CarrierServiceGroup = $CarrierServiceGroup;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintDocument
     */
    public function getPrintDocument()
    {
        return $this->PrintDocument;
    }

    /**
     * @param \Booni3\GFS\Type\PrintDocument $PrintDocument
     * @return CarrierDocument
     */
    public function withPrintDocument($PrintDocument)
    {
        $new = clone $this;
        $new->PrintDocument = $PrintDocument;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $ResponseDetails
     * @return CarrierDocument
     */
    public function withResponseDetails($ResponseDetails)
    {
        $new = clone $this;
        $new->ResponseDetails = $ResponseDetails;

        return $new;
    }


}

