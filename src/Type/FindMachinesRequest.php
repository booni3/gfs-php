<?php

namespace Booni3\GFS\Type;

class FindMachinesRequest
{

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $Authentication;

    /**
     * @var string
     */
    private $Postcode;

    /**
     * @var string
     */
    private $ContractNo;

    /**
     * @var int
     */
    private $RecordLimit;

    /**
     * @var bool
     */
    private $Operating;

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthentication()
    {
        return $this->Authentication;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $Authentication
     * @return FindMachinesRequest
     */
    public function withAuthentication($Authentication)
    {
        $new = clone $this;
        $new->Authentication = $Authentication;

        return $new;
    }

    /**
     * @return string
     */
    public function getPostcode()
    {
        return $this->Postcode;
    }

    /**
     * @param string $Postcode
     * @return FindMachinesRequest
     */
    public function withPostcode($Postcode)
    {
        $new = clone $this;
        $new->Postcode = $Postcode;

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
     * @return FindMachinesRequest
     */
    public function withContractNo($ContractNo)
    {
        $new = clone $this;
        $new->ContractNo = $ContractNo;

        return $new;
    }

    /**
     * @return int
     */
    public function getRecordLimit()
    {
        return $this->RecordLimit;
    }

    /**
     * @param int $RecordLimit
     * @return FindMachinesRequest
     */
    public function withRecordLimit($RecordLimit)
    {
        $new = clone $this;
        $new->RecordLimit = $RecordLimit;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOperating()
    {
        return $this->Operating;
    }

    /**
     * @param bool $Operating
     * @return FindMachinesRequest
     */
    public function withOperating($Operating)
    {
        $new = clone $this;
        $new->Operating = $Operating;

        return $new;
    }


}

