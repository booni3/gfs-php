<?php

namespace Booni3\GFS\Type;

class ExpertDetails
{

    /**
     * @var string
     */
    private $CallType;

    /**
     * @var \Booni3\GFS\Type\ExpertSuperserviceSection
     */
    private $SuperserviceSection;

    /**
     * @return string
     */
    public function getCallType()
    {
        return $this->CallType;
    }

    /**
     * @param string $CallType
     * @return ExpertDetails
     */
    public function withCallType($CallType)
    {
        $new = clone $this;
        $new->CallType = $CallType;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ExpertSuperserviceSection
     */
    public function getSuperserviceSection()
    {
        return $this->SuperserviceSection;
    }

    /**
     * @param \Booni3\GFS\Type\ExpertSuperserviceSection $SuperserviceSection
     * @return ExpertDetails
     */
    public function withSuperserviceSection($SuperserviceSection)
    {
        $new = clone $this;
        $new->SuperserviceSection = $SuperserviceSection;

        return $new;
    }


}

