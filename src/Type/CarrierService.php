<?php

namespace Booni3\GFS\Type;

class CarrierService
{

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var string
     */
    private $RouteMapCode;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ServiceCode;

    /**
     * @var string
     */
    private $PackageCode;

    /**
     * @var string
     */
    private $Dropoff;

    /**
     * @return string
     */
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return CarrierService
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return string
     */
    public function getRouteMapCode()
    {
        return $this->RouteMapCode;
    }

    /**
     * @param string $RouteMapCode
     * @return CarrierService
     */
    public function withRouteMapCode($RouteMapCode)
    {
        $new = clone $this;
        $new->RouteMapCode = $RouteMapCode;

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
     * @return CarrierService
     */
    public function withCarrier($Carrier)
    {
        $new = clone $this;
        $new->Carrier = $Carrier;

        return $new;
    }

    /**
     * @return string
     */
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return CarrierService
     */
    public function withServiceCode($ServiceCode)
    {
        $new = clone $this;
        $new->ServiceCode = $ServiceCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getPackageCode()
    {
        return $this->PackageCode;
    }

    /**
     * @param string $PackageCode
     * @return CarrierService
     */
    public function withPackageCode($PackageCode)
    {
        $new = clone $this;
        $new->PackageCode = $PackageCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getDropoff()
    {
        return $this->Dropoff;
    }

    /**
     * @param string $Dropoff
     * @return CarrierService
     */
    public function withDropoff($Dropoff)
    {
        $new = clone $this;
        $new->Dropoff = $Dropoff;

        return $new;
    }


}

