<?php

namespace Booni3\GFS\Type;

class ExportAddressBookResponse
{

    /**
     * @var \Booni3\GFS\Type\ResponseDetails
     */
    private $ResponseDetails;

    /**
     * @var \Booni3\GFS\Type\Recipient
     */
    private $AddressBookRecords;

    /**
     * @return \Booni3\GFS\Type\ResponseDetails
     */
    public function getResponseDetails()
    {
        return $this->ResponseDetails;
    }

    /**
     * @param \Booni3\GFS\Type\ResponseDetails $ResponseDetails
     * @return ExportAddressBookResponse
     */
    public function withResponseDetails($ResponseDetails)
    {
        $new = clone $this;
        $new->ResponseDetails = $ResponseDetails;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\Recipient
     */
    public function getAddressBookRecords()
    {
        return $this->AddressBookRecords;
    }

    /**
     * @param \Booni3\GFS\Type\Recipient $AddressBookRecords
     * @return ExportAddressBookResponse
     */
    public function withAddressBookRecords($AddressBookRecords)
    {
        $new = clone $this;
        $new->AddressBookRecords = $AddressBookRecords;

        return $new;
    }


}

