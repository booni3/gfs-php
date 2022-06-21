<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedManifest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\PrintManifestRequest
     */
    private $PrintManifestRequest;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\PrintManifestRequest $PrintManifestRequest
     */
    public function __construct($PrintManifestRequest)
    {
        $this->PrintManifestRequest = $PrintManifestRequest;
    }

    /**
     * @return \Booni3\GFS\Type\PrintManifestRequest
     */
    public function getPrintManifestRequest()
    {
        return $this->PrintManifestRequest;
    }

    /**
     * @param \Booni3\GFS\Type\PrintManifestRequest $PrintManifestRequest
     * @return RequestedManifest
     */
    public function withPrintManifestRequest($PrintManifestRequest)
    {
        $new = clone $this;
        $new->PrintManifestRequest = $PrintManifestRequest;

        return $new;
    }


}

