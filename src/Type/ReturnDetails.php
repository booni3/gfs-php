<?php

namespace Booni3\GFS\Type;

class ReturnDetails
{

    /**
     * @var \Booni3\GFS\Type\Party
     */
    private $AltReturnAddress;

    /**
     * @var \Booni3\GFS\Type\EMailLabelDetails
     */
    private $EMailLabelDetails;

    /**
     * @var string
     */
    private $ReturnType;

    /**
     * @var \Booni3\GFS\Type\Rma
     */
    private $Rma;

    /**
     * @var string
     */
    private $ReturnService;

    /**
     * @var \Booni3\GFS\Type\Money
     */
    private $PUD;

    /**
     * @return \Booni3\GFS\Type\Party
     */
    public function getAltReturnAddress()
    {
        return $this->AltReturnAddress;
    }

    /**
     * @param \Booni3\GFS\Type\Party $AltReturnAddress
     * @return ReturnDetails
     */
    public function withAltReturnAddress($AltReturnAddress)
    {
        $new = clone $this;
        $new->AltReturnAddress = $AltReturnAddress;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\EMailLabelDetails
     */
    public function getEMailLabelDetails()
    {
        return $this->EMailLabelDetails;
    }

    /**
     * @param \Booni3\GFS\Type\EMailLabelDetails $EMailLabelDetails
     * @return ReturnDetails
     */
    public function withEMailLabelDetails($EMailLabelDetails)
    {
        $new = clone $this;
        $new->EMailLabelDetails = $EMailLabelDetails;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }

    /**
     * @param string $ReturnType
     * @return ReturnDetails
     */
    public function withReturnType($ReturnType)
    {
        $new = clone $this;
        $new->ReturnType = $ReturnType;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Rma
     */
    public function getRma()
    {
        return $this->Rma;
    }

    /**
     * @param \Booni3\GFS\Type\Rma $Rma
     * @return ReturnDetails
     */
    public function withRma($Rma)
    {
        $new = clone $this;
        $new->Rma = $Rma;

        return $new;
    }

    /**
     * @return string
     */
    public function getReturnService()
    {
        return $this->ReturnService;
    }

    /**
     * @param string $ReturnService
     * @return ReturnDetails
     */
    public function withReturnService($ReturnService)
    {
        $new = clone $this;
        $new->ReturnService = $ReturnService;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Money
     */
    public function getPUD()
    {
        return $this->PUD;
    }

    /**
     * @param \Booni3\GFS\Type\Money $PUD
     * @return ReturnDetails
     */
    public function withPUD($PUD)
    {
        $new = clone $this;
        $new->PUD = $PUD;

        return $new;
    }


}

