<?php

namespace Booni3\GFS\Type;

class PrintSalesOrderRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthDetails;

    /**
     * @var \Booni3\GFS\Type\CarrierServiceGroup
     */
    private $ServiceGroups;

    /**
     * @var string
     */
    private $PrintType;

    /**
     * @var bool
     */
    private $MergeOrders;

    /**
     * @var int
     */
    private $SiteId;

    /**
     * @var \DateTimeInterface
     */
    private $SalesOrderDate;

    /**
     * @var string
     */
    private $SalesOrderNumber;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthDetails()
    {
        return $this->AuthDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthDetails
     * @return PrintSalesOrderRequest
     */
    public function withAuthDetails($AuthDetails)
    {
        $new = clone $this;
        $new->AuthDetails = $AuthDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierServiceGroup
     */
    public function getServiceGroups()
    {
        return $this->ServiceGroups;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServiceGroup $ServiceGroups
     * @return PrintSalesOrderRequest
     */
    public function withServiceGroups($ServiceGroups)
    {
        $new = clone $this;
        $new->ServiceGroups = $ServiceGroups;

        return $new;
    }

    /**
     * @return string
     */
    public function getPrintType()
    {
        return $this->PrintType;
    }

    /**
     * @param string $PrintType
     * @return PrintSalesOrderRequest
     */
    public function withPrintType($PrintType)
    {
        $new = clone $this;
        $new->PrintType = $PrintType;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMergeOrders()
    {
        return $this->MergeOrders;
    }

    /**
     * @param bool $MergeOrders
     * @return PrintSalesOrderRequest
     */
    public function withMergeOrders($MergeOrders)
    {
        $new = clone $this;
        $new->MergeOrders = $MergeOrders;

        return $new;
    }

    /**
     * @return int
     */
    public function getSiteId()
    {
        return $this->SiteId;
    }

    /**
     * @param int $SiteId
     * @return PrintSalesOrderRequest
     */
    public function withSiteId($SiteId)
    {
        $new = clone $this;
        $new->SiteId = $SiteId;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSalesOrderDate()
    {
        return $this->SalesOrderDate;
    }

    /**
     * @param \DateTimeInterface $SalesOrderDate
     * @return PrintSalesOrderRequest
     */
    public function withSalesOrderDate($SalesOrderDate)
    {
        $new = clone $this;
        $new->SalesOrderDate = $SalesOrderDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getSalesOrderNumber()
    {
        return $this->SalesOrderNumber;
    }

    /**
     * @param string $SalesOrderNumber
     * @return PrintSalesOrderRequest
     */
    public function withSalesOrderNumber($SalesOrderNumber)
    {
        $new = clone $this;
        $new->SalesOrderNumber = $SalesOrderNumber;

        return $new;
    }


}

