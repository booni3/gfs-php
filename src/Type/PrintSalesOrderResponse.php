<?php

namespace Booni3\GFS\Type;

class PrintSalesOrderResponse
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\CarrierDocument
     */
    private $CarrierDocuments;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return PrintSalesOrderResponse
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierDocument
     */
    public function getCarrierDocuments()
    {
        return $this->CarrierDocuments;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierDocument $CarrierDocuments
     * @return PrintSalesOrderResponse
     */
    public function withCarrierDocuments($CarrierDocuments)
    {
        $new = clone $this;
        $new->CarrierDocuments = $CarrierDocuments;

        return $new;
    }


}

