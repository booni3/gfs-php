<?php

namespace Booni3\GFS\Type;

class ResponseDetails
{

    /**
     * @var string
     */
    private $Status;

    /**
     * @var string
     */
    private $StatusCode;

    /**
     * @var string
     */
    private $StatusMessage;

    /**
     * @var string
     */
    private $StatusDescription;

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return ResponseDetails
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusCode()
    {
        return $this->StatusCode;
    }

    /**
     * @param string $StatusCode
     * @return ResponseDetails
     */
    public function withStatusCode($StatusCode)
    {
        $new = clone $this;
        $new->StatusCode = $StatusCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusMessage()
    {
        return $this->StatusMessage;
    }

    /**
     * @param string $StatusMessage
     * @return ResponseDetails
     */
    public function withStatusMessage($StatusMessage)
    {
        $new = clone $this;
        $new->StatusMessage = $StatusMessage;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->StatusDescription;
    }

    /**
     * @param string $StatusDescription
     * @return ResponseDetails
     */
    public function withStatusDescription($StatusDescription)
    {
        $new = clone $this;
        $new->StatusDescription = $StatusDescription;

        return $new;
    }


}

