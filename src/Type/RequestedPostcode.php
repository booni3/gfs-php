<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RequestedPostcode implements RequestInterface
{

    /**
     * @var string
     */
    private $SearchText;

    /**
     * @var int
     */
    private $SearchType;

    /**
     * @var int
     */
    private $ResultNum;

    /**
     * Constructor
     *
     * @var string $SearchText
     * @var int $SearchType
     * @var int $ResultNum
     */
    public function __construct($SearchText, $SearchType, $ResultNum)
    {
        $this->SearchText = $SearchText;
        $this->SearchType = $SearchType;
        $this->ResultNum = $ResultNum;
    }

    /**
     * @return string
     */
    public function getSearchText()
    {
        return $this->SearchText;
    }

    /**
     * @param string $SearchText
     * @return RequestedPostcode
     */
    public function withSearchText($SearchText)
    {
        $new = clone $this;
        $new->SearchText = $SearchText;

        return $new;
    }

    /**
     * @return int
     */
    public function getSearchType()
    {
        return $this->SearchType;
    }

    /**
     * @param int $SearchType
     * @return RequestedPostcode
     */
    public function withSearchType($SearchType)
    {
        $new = clone $this;
        $new->SearchType = $SearchType;

        return $new;
    }

    /**
     * @return int
     */
    public function getResultNum()
    {
        return $this->ResultNum;
    }

    /**
     * @param int $ResultNum
     * @return RequestedPostcode
     */
    public function withResultNum($ResultNum)
    {
        $new = clone $this;
        $new->ResultNum = $ResultNum;

        return $new;
    }


}

