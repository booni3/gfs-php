<?php

namespace Booni3\GFS\Type;

class DeliverySlotDetails
{

    /**
     * @var string
     */
    private $AramexDeliveryType;

    /**
     * @var string
     */
    private $DirectDelivery;

    /**
     * @var \DateTimeInterface
     */
    private $DeliveryDate;

    /**
     * @var \Booni3\GFS\Type\TimeInterval
     */
    private $DeliveryTime;

    /**
     * @var string
     */
    private $DeliveryOption;

    /**
     * @return string
     */
    public function getAramexDeliveryType()
    {
        return $this->AramexDeliveryType;
    }

    /**
     * @param string $AramexDeliveryType
     * @return DeliverySlotDetails
     */
    public function withAramexDeliveryType($AramexDeliveryType)
    {
        $new = clone $this;
        $new->AramexDeliveryType = $AramexDeliveryType;

        return $new;
    }

    /**
     * @return string
     */
    public function getDirectDelivery()
    {
        return $this->DirectDelivery;
    }

    /**
     * @param string $DirectDelivery
     * @return DeliverySlotDetails
     */
    public function withDirectDelivery($DirectDelivery)
    {
        $new = clone $this;
        $new->DirectDelivery = $DirectDelivery;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDeliveryDate()
    {
        return $this->DeliveryDate;
    }

    /**
     * @param \DateTimeInterface $DeliveryDate
     * @return DeliverySlotDetails
     */
    public function withDeliveryDate($DeliveryDate)
    {
        $new = clone $this;
        $new->DeliveryDate = $DeliveryDate;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\TimeInterval
     */
    public function getDeliveryTime()
    {
        return $this->DeliveryTime;
    }

    /**
     * @param \Booni3\GFS\Type\TimeInterval $DeliveryTime
     * @return DeliverySlotDetails
     */
    public function withDeliveryTime($DeliveryTime)
    {
        $new = clone $this;
        $new->DeliveryTime = $DeliveryTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getDeliveryOption()
    {
        return $this->DeliveryOption;
    }

    /**
     * @param string $DeliveryOption
     * @return DeliverySlotDetails
     */
    public function withDeliveryOption($DeliveryOption)
    {
        $new = clone $this;
        $new->DeliveryOption = $DeliveryOption;

        return $new;
    }


}

