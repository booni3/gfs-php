<?php

namespace Booni3\GFS\Type;

class CancelCarrierDispatchRequest
{

    /**
     * @var string
     */
    private $Instructions;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var \DateTimeInterface
     */
    private $ScheduledDate;

    /**
     * @var string
     */
    private $DispatchNumber;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * @return string
     */
    public function getInstructions()
    {
        return $this->Instructions;
    }

    /**
     * @param string $Instructions
     * @return CancelCarrierDispatchRequest
     */
    public function withInstructions($Instructions)
    {
        $new = clone $this;
        $new->Instructions = $Instructions;

        return $new;
    }

    /**
     * @return string
     */
    public function getCarrier()
    {
        return $this->Carrier;
    }

    /**
     * @param string $Carrier
     * @return CancelCarrierDispatchRequest
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getScheduledDate()
    {
        return $this->ScheduledDate;
    }

    /**
     * @param \DateTimeInterface $ScheduledDate
     * @return CancelCarrierDispatchRequest
     */
    public function withScheduledDate($ScheduledDate)
    {
        $new = clone $this;
        $new->ScheduledDate = $ScheduledDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getDispatchNumber()
    {
        return $this->DispatchNumber;
    }

    /**
     * @param string $DispatchNumber
     * @return CancelCarrierDispatchRequest
     */
    public function withDispatchNumber($DispatchNumber)
    {
        $new = clone $this;
        $new->DispatchNumber = $DispatchNumber;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return CancelCarrierDispatchRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

