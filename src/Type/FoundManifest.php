<?php

namespace Booni3\GFS\Type;

class FoundManifest
{

    /**
     * @var \DateTimeInterface
     */
    private $ManifestDate;

    /**
     * @var \Booni3\GFS\Type\CarrierServiceGroup
     */
    private $CarrierServiceGroup;

    /**
     * @return \DateTimeInterface
     */
    public function getManifestDate()
    {
        return $this->ManifestDate;
    }

    /**
     * @param \DateTimeInterface $ManifestDate
     * @return FoundManifest
     */
    public function withManifestDate($ManifestDate)
    {
        $new = clone $this;
        $new->ManifestDate = $ManifestDate;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\CarrierServiceGroup
     */
    public function getCarrierServiceGroup()
    {
        return $this->CarrierServiceGroup;
    }

    /**
     * @param \Booni3\GFS\Type\CarrierServiceGroup $CarrierServiceGroup
     * @return FoundManifest
     */
    public function withCarrierServiceGroup($CarrierServiceGroup)
    {
        $new = clone $this;
        $new->CarrierServiceGroup = $CarrierServiceGroup;

        return $new;
    }


}

