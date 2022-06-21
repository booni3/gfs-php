<?php

namespace Booni3\GFS\Type;

class VersionId
{

    /**
     * @var int
     */
    private $Major;

    /**
     * @var int
     */
    private $Minor;

    /**
     * @var int
     */
    private $Intermediate;

    /**
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }

    /**
     * @param int $Major
     * @return VersionId
     */
    public function withMajor($Major)
    {
        $new = clone $this;
        $new->Major = $Major;

        return $new;
    }

    /**
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }

    /**
     * @param int $Minor
     * @return VersionId
     */
    public function withMinor($Minor)
    {
        $new = clone $this;
        $new->Minor = $Minor;

        return $new;
    }

    /**
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }

    /**
     * @param int $Intermediate
     * @return VersionId
     */
    public function withIntermediate($Intermediate)
    {
        $new = clone $this;
        $new->Intermediate = $Intermediate;

        return $new;
    }


}

