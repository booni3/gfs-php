<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedRMSalesOrder implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\PrintSalesOrderResponse
     */
    private $PrintRMSalesOrderResult;

    /**
     * @return \Booni3\GFS\Type\PrintSalesOrderResponse
     */
    public function getPrintRMSalesOrderResult()
    {
        return $this->PrintRMSalesOrderResult;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSalesOrderResponse $PrintRMSalesOrderResult
     * @return ProcessedRMSalesOrder
     */
    public function withPrintRMSalesOrderResult($PrintRMSalesOrderResult)
    {
        $new = clone $this;
        $new->PrintRMSalesOrderResult = $PrintRMSalesOrderResult;

        return $new;
    }


}

