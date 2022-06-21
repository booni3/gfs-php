<?php

namespace Booni3\GFS\Type;

class ArrayOfPackageUnit
{

    /**
     * @var \Booni3\GFS\Type\PackageUnit
     */
    private $PackageUnit;

    /**
     * @return \Booni3\GFS\Type\PackageUnit
     */
    public function getPackageUnit()
    {
        return $this->PackageUnit;
    }

    /**
     * @param \Booni3\GFS\Type\PackageUnit $PackageUnit
     * @return ArrayOfPackageUnit
     */
    public function withPackageUnit($PackageUnit)
    {
        $new = clone $this;
        $new->PackageUnit = $PackageUnit;

        return $new;
    }


}

