<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedReports implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ReportRequest
     */
    private $ReportRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ReportRequest $ReportRequest
     */
    public function __construct($ReportRequest)
    {
        $this->ReportRequest = $ReportRequest;
    }

    /**
     * @return \Booni3\GFS\Type\ReportRequest
     */
    public function getReportRequest()
    {
        return $this->ReportRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ReportRequest $ReportRequest
     * @return RequestedReports
     */
    public function withReportRequest($ReportRequest)
    {
        $new = clone $this;
        $new->ReportRequest = $ReportRequest;

        return $new;
    }


}

