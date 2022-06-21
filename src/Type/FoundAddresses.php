<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class FoundAddresses implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\SearchPartyResponse
     */
    private $SearchAddressResult;

    /**
     * @return \Booni3\GFS\Type\SearchPartyResponse
     */
    public function getSearchAddressResult()
    {
        return $this->SearchAddressResult;
    }

    /**
     * @param \Booni3\GFS\Type\SearchPartyResponse $SearchAddressResult
     * @return FoundAddresses
     */
    public function withSearchAddressResult($SearchAddressResult)
    {
        $new = clone $this;
        $new->SearchAddressResult = $SearchAddressResult;

        return $new;
    }


}

