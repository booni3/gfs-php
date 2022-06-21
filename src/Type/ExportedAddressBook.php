<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\ResultInterface;

class ExportedAddressBook implements ResultInterface
{

    /**
     * @var \Booni3\GFS\Type\ExportAddressBookResponse
     */
    private $ExportAddressBookResult;

    /**
     * @return \Booni3\GFS\Type\ExportAddressBookResponse
     */
    public function getExportAddressBookResult()
    {
        return $this->ExportAddressBookResult;
    }

    /**
     * @param \Booni3\GFS\Type\ExportAddressBookResponse $ExportAddressBookResult
     * @return ExportedAddressBook
     */
    public function withExportAddressBookResult($ExportAddressBookResult)
    {
        $new = clone $this;
        $new->ExportAddressBookResult = $ExportAddressBookResult;

        return $new;
    }


}

