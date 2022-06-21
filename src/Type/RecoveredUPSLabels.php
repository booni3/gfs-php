<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RecoveredUPSLabels implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\RecoveredUPSLabels
     */
    private $UPSLabelsRecoveryResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var string
     */
    private $ConsNo;

    /**
     * @var \Booni3\GFS\Type\PrintDocument
     */
    private $Labels;

    /**
     * @return \Booni3\GFS\Type\RecoveredUPSLabels
     */
    public function getUPSLabelsRecoveryResult()
    {
        return $this->UPSLabelsRecoveryResult;
    }

    /**
     * @param \Booni3\GFS\Type\RecoveredUPSLabels $UPSLabelsRecoveryResult
     * @return RecoveredUPSLabels
     */
    public function withUPSLabelsRecoveryResult($UPSLabelsRecoveryResult)
    {
        $new = clone $this;
        $new->UPSLabelsRecoveryResult = $UPSLabelsRecoveryResult;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return RecoveredUPSLabels
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getConsNo()
    {
        return $this->ConsNo;
    }

    /**
     * @param string $ConsNo
     * @return RecoveredUPSLabels
     */
    public function withConsNo($ConsNo)
    {
        $new = clone $this;
        $new->ConsNo = $ConsNo;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintDocument
     */
    public function getLabels()
    {
        return $this->Labels;
    }

    /**
     * @param \Booni3\GFS\Type\PrintDocument $Labels
     * @return RecoveredUPSLabels
     */
    public function withLabels($Labels)
    {
        $new = clone $this;
        $new->Labels = $Labels;

        return $new;
    }


}

