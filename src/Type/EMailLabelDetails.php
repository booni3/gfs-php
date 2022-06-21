<?php

namespace Booni3\GFS\Type;

class EMailLabelDetails
{

    /**
     * @var string
     */
    private $EMail;

    /**
     * @var string
     */
    private $EMailMessage;

    /**
     * @var \DateTimeInterface
     */
    private $ExpirationDate;

    /**
     * @var string
     */
    private $MerchantPhone;

    /**
     * @return string
     */
    public function getEMail()
    {
        return $this->EMail;
    }

    /**
     * @param string $EMail
     * @return EMailLabelDetails
     */
    public function withEMail($EMail)
    {
        $new = clone $this;
        $new->EMail = $EMail;

        return $new;
    }

    /**
     * @return string
     */
    public function getEMailMessage()
    {
        return $this->EMailMessage;
    }

    /**
     * @param string $EMailMessage
     * @return EMailLabelDetails
     */
    public function withEMailMessage($EMailMessage)
    {
        $new = clone $this;
        $new->EMailMessage = $EMailMessage;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }

    /**
     * @param \DateTimeInterface $ExpirationDate
     * @return EMailLabelDetails
     */
    public function withExpirationDate($ExpirationDate)
    {
        $new = clone $this;
        $new->ExpirationDate = $ExpirationDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getMerchantPhone()
    {
        return $this->MerchantPhone;
    }

    /**
     * @param string $MerchantPhone
     * @return EMailLabelDetails
     */
    public function withMerchantPhone($MerchantPhone)
    {
        $new = clone $this;
        $new->MerchantPhone = $MerchantPhone;

        return $new;
    }


}

