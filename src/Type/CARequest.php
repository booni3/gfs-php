<?php

namespace Booni3\GFS\Type;

class CARequest
{

    /**
     * @var \DateTimeInterface
     */
    private $DateFilterFrom;

    /**
     * @var \DateTimeInterface
     */
    private $DateFilterTo;

    /**
     * @var bool
     */
    private $SaveNotValid;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthDetails;

    /**
     * @var \Booni3\GFS\Type\PrintSpecification
     */
    private $PrintSpec;

    /**
     * @return \DateTimeInterface
     */
    public function getDateFilterFrom()
    {
        return $this->DateFilterFrom;
    }

    /**
     * @param \DateTimeInterface $DateFilterFrom
     * @return CARequest
     */
    public function withDateFilterFrom($DateFilterFrom)
    {
        $new = clone $this;
        $new->DateFilterFrom = $DateFilterFrom;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDateFilterTo()
    {
        return $this->DateFilterTo;
    }

    /**
     * @param \DateTimeInterface $DateFilterTo
     * @return CARequest
     */
    public function withDateFilterTo($DateFilterTo)
    {
        $new = clone $this;
        $new->DateFilterTo = $DateFilterTo;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaveNotValid()
    {
        return $this->SaveNotValid;
    }

    /**
     * @param bool $SaveNotValid
     * @return CARequest
     */
    public function withSaveNotValid($SaveNotValid)
    {
        $new = clone $this;
        $new->SaveNotValid = $SaveNotValid;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthDetails()
    {
        return $this->AuthDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthDetails
     * @return CARequest
     */
    public function withAuthDetails($AuthDetails)
    {
        $new = clone $this;
        $new->AuthDetails = $AuthDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\PrintSpecification
     */
    public function getPrintSpec()
    {
        return $this->PrintSpec;
    }

    /**
     * @param \Booni3\GFS\Type\PrintSpecification $PrintSpec
     * @return CARequest
     */
    public function withPrintSpec($PrintSpec)
    {
        $new = clone $this;
        $new->PrintSpec = $PrintSpec;

        return $new;
    }


}

