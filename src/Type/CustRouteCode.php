<?php

namespace Booni3\GFS\Type;

class CustRouteCode
{

    /**
     * @var string
     */
    private $RouteCode;

    /**
     * @var string
     */
    private $Carrier;

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var string
     */
    private $ServiceCode;

    /**
     * @var string
     */
    private $RouteDesc;

    /**
     * @var string
     */
    private $PackageCode;

    /**
     * @var bool
     */
    private $SaturdayDeliv;

    /**
     * @return string
     */
    public function getRouteCode()
    {
        return $this->RouteCode;
    }

    /**
     * @param string $RouteCode
     * @return CustRouteCode
     */
    public function withRouteCode($RouteCode)
    {
        $new = clone $this;
        $new->RouteCode = $RouteCode;

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
     * @return CustRouteCode
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
    public function getContractNo()
    {
        return $this->ContractNo;
    }

    /**
     * @param string $ContractNo
     * @return CustRouteCode
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
    public function getServiceCode()
    {
        return $this->ServiceCode;
    }

    /**
     * @param string $ServiceCode
     * @return CustRouteCode
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
    public function getRouteDesc()
    {
        return $this->RouteDesc;
    }

    /**
     * @param string $RouteDesc
     * @return CustRouteCode
     */
    public function withRouteDesc($RouteDesc)
    {
        $new = clone $this;
        $new->RouteDesc = $RouteDesc;

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
     * @return CustRouteCode
     */
    public function withPackageCode($PackageCode)
    {
        $new = clone $this;
        $new->PackageCode = $PackageCode;

        return $new;
    }

    /**
     * @return bool
     */
    public function getSaturdayDeliv()
    {
        return $this->SaturdayDeliv;
    }

    /**
     * @param bool $SaturdayDeliv
     * @return CustRouteCode
     */
    public function withSaturdayDeliv($SaturdayDeliv)
    {
        $new = clone $this;
        $new->SaturdayDeliv = $SaturdayDeliv;

        return $new;
    }


}

