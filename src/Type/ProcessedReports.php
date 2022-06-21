<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedReports implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ReportResponse
     */
    private $ProcessReportsResult;

    /**
     * @return \Booni3\GFS\Type\ReportResponse
     */
    public function getProcessReportsResult()
    {
        return $this->ProcessReportsResult;
    }

    /**
     * @param \Booni3\GFS\Type\ReportResponse $ProcessReportsResult
     * @return ProcessedReports
     */
    public function withProcessReportsResult($ProcessReportsResult)
    {
        $new = clone $this;
        $new->ProcessReportsResult = $ProcessReportsResult;

        return $new;
    }


}

