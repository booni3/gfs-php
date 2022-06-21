<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ProcessedManifest implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\PrintManifestResponse
     */
    private $PrintManifestResult;

    /**
     * @return \Booni3\GFS\Type\PrintManifestResponse
     */
    public function getPrintManifestResult()
    {
        return $this->PrintManifestResult;
    }

    /**
     * @param \Booni3\GFS\Type\PrintManifestResponse $PrintManifestResult
     * @return ProcessedManifest
     */
    public function withPrintManifestResult($PrintManifestResult)
    {
        $new = clone $this;
        $new->PrintManifestResult = $PrintManifestResult;

        return $new;
    }


}

