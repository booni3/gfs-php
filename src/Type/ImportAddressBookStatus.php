<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ImportAddressBookStatus implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\StatusResponse
     */
    private $ImportAddressBookResult;

    /**
     * @return \Booni3\GFS\Type\StatusResponse
     */
    public function getImportAddressBookResult()
    {
        return $this->ImportAddressBookResult;
    }

    /**
     * @param \Booni3\GFS\Type\StatusResponse $ImportAddressBookResult
     * @return ImportAddressBookStatus
     */
    public function withImportAddressBookResult($ImportAddressBookResult)
    {
        $new = clone $this;
        $new->ImportAddressBookResult = $ImportAddressBookResult;

        return $new;
    }


}

