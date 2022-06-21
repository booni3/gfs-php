<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedSalesOrder implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\PrintSalesOrderRequest
     */
    private $SalesOrderRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\PrintSalesOrderRequest $SalesOrderRequest
     */
    public function __construct($SalesOrderRequest)
    {
        $this->SalesOrderRequest = $SalesOrderRequest;
    }

    /**
     * @return \Booni3\GFS\Type\PrintSalesOrderRequest
     */
    public function getSalesOrderRequest()
    {
        return $this->SalesOrderRequest;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSalesOrderRequest $SalesOrderRequest
     * @return RequestedSalesOrder
     */
    public function withSalesOrderRequest($SalesOrderRequest)
    {
        $new = clone $this;
        $new->SalesOrderRequest = $SalesOrderRequest;

        return $new;
    }


}

