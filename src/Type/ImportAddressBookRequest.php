<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ImportAddressBookRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ImportAddressBookRequest
     */
    private $ImportAddressBookRequest;

    /**
     * @var \Booni3\GFS\Type\Recipient
     */
    private $AddressBookRecords;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ImportAddressBookRequest $ImportAddressBookRequest
     * @var \Booni3\GFS\Type\Recipient $AddressBookRecords
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     */
    public function __construct($ImportAddressBookRequest, $AddressBookRecords, $AuthenticationDetails)
    {
        $this->ImportAddressBookRequest = $ImportAddressBookRequest;
        $this->AddressBookRecords = $AddressBookRecords;
        $this->AuthenticationDetails = $AuthenticationDetails;
    }

    /**
     * @return \Booni3\GFS\Type\ImportAddressBookRequest
     */
    public function getImportAddressBookRequest()
    {
        return $this->ImportAddressBookRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ImportAddressBookRequest $ImportAddressBookRequest
     * @return ImportAddressBookRequest
     */
    public function withImportAddressBookRequest($ImportAddressBookRequest)
    {
        $new = clone $this;
        $new->ImportAddressBookRequest = $ImportAddressBookRequest;

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
     * @return ImportAddressBookRequest
     */
    public function withAddressBookRecords($AddressBookRecords)
    {
        $new = clone $this;
        $new->AddressBookRecords = $AddressBookRecords;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AuthenticationDetails
     */
    public function getAuthenticationDetails()
    {
        return $this->AuthenticationDetails;
    }

    /**
     * @param \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     * @return ImportAddressBookRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

