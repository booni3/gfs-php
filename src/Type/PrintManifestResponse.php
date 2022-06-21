<?php

namespace Booni3\GFS\Type;

class PrintManifestResponse
{

    /**
     * @var \Booni3\GFS\Type\FoundManifest
     */
    private $FoundManifests;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\CarrierDocument
     */
    private $CarrierDocuments;

    /**
     * @return \Booni3\GFS\Type\FoundManifest
     */
    public function getFoundManifests()
    {
        return $this->FoundManifests;
    }

    /**
     * @param \Booni3\GFS\Type\FoundManifest $FoundManifests
     * @return PrintManifestResponse
     */
    public function withFoundManifests($FoundManifests)
    {
        $new = clone $this;
        $new->FoundManifests = $FoundManifests;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return PrintManifestResponse
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
     * @return PrintManifestResponse
     */
    public function withCarrierDocuments($CarrierDocuments)
    {
        $new = clone $this;
        $new->CarrierDocuments = $CarrierDocuments;

        return $new;
    }


}

