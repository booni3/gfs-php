<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ValidatedCarrierServices implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidatedCarrierServices
     */
    private $LaneFeasibilityResult;

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $Status;

    /**
     * @var \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    private $AvailableServices;

    /**
     * @var \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    private $UnavailableServices;

    /**
     * @var \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    private $UnknownServices;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $FromAddress;

    /**
     * @var \Booni3\GFS\Type\Address
     */
    private $ToAddress;

    /**
     * @return \Booni3\GFS\Type\ValidatedCarrierServices
     */
    public function getLaneFeasibilityResult()
    {
        return $this->LaneFeasibilityResult;
    }

    /**
     * @param \Booni3\GFS\Type\ValidatedCarrierServices $LaneFeasibilityResult
     * @return ValidatedCarrierServices
     */
    public function withLaneFeasibilityResult($LaneFeasibilityResult)
    {
        $new = clone $this;
        $new->LaneFeasibilityResult = $LaneFeasibilityResult;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $Status
     * @return ValidatedCarrierServices
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    public function getAvailableServices()
    {
        return $this->AvailableServices;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfCarrierServices $AvailableServices
     * @return ValidatedCarrierServices
     */
    public function withAvailableServices($AvailableServices)
    {
        $new = clone $this;
        $new->AvailableServices = $AvailableServices;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    public function getUnavailableServices()
    {
        return $this->UnavailableServices;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfCarrierServices $UnavailableServices
     * @return ValidatedCarrierServices
     */
    public function withUnavailableServices($UnavailableServices)
    {
        $new = clone $this;
        $new->UnavailableServices = $UnavailableServices;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\ArrayOfCarrierServices
     */
    public function getUnknownServices()
    {
        return $this->UnknownServices;
    }

    /**
     * @param \Booni3\GFS\Type\ArrayOfCarrierServices $UnknownServices
     * @return ValidatedCarrierServices
     */
    public function withUnknownServices($UnknownServices)
    {
        $new = clone $this;
        $new->UnknownServices = $UnknownServices;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getFromAddress()
    {
        return $this->FromAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $FromAddress
     * @return ValidatedCarrierServices
     */
    public function withFromAddress($FromAddress)
    {
        $new = clone $this;
        $new->FromAddress = $FromAddress;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Address
     */
    public function getToAddress()
    {
        return $this->ToAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Address $ToAddress
     * @return ValidatedCarrierServices
     */
    public function withToAddress($ToAddress)
    {
        $new = clone $this;
        $new->ToAddress = $ToAddress;

        return $new;
    }


}

