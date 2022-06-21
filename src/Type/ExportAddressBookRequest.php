<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ExportAddressBookRequest implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ExportAddressBookRequest
     */
    private $ExportAddressBookRequest;

    /**
     * @var \Booni3\GFS\Type\AddressBookExportOptions
     */
    private $ExportOptions;

    /**
     * @var \Booni3\GFS\Type\AuthenticationDetails
     */
    private $AuthenticationDetails;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ExportAddressBookRequest $ExportAddressBookRequest
     * @var \Booni3\GFS\Type\AddressBookExportOptions $ExportOptions
     * @var \Booni3\GFS\Type\AuthenticationDetails $AuthenticationDetails
     */
    public function __construct($ExportAddressBookRequest, $ExportOptions, $AuthenticationDetails)
    {
        $this->ExportAddressBookRequest = $ExportAddressBookRequest;
        $this->ExportOptions = $ExportOptions;
        $this->AuthenticationDetails = $AuthenticationDetails;
    }

    /**
     * @return \Booni3\GFS\Type\ExportAddressBookRequest
     */
    public function getExportAddressBookRequest()
    {
        return $this->ExportAddressBookRequest;
    }

    /**
     * @param \Booni3\GFS\Type\ExportAddressBookRequest $ExportAddressBookRequest
     * @return ExportAddressBookRequest
     */
    public function withExportAddressBookRequest($ExportAddressBookRequest)
    {
        $new = clone $this;
        $new->ExportAddressBookRequest = $ExportAddressBookRequest;

        return $new;
    }

    /**
     * @return \Booni3\GFS\Type\AddressBookExportOptions
     */
    public function getExportOptions()
    {
        return $this->ExportOptions;
    }

    /**
     * @param \Booni3\GFS\Type\AddressBookExportOptions $ExportOptions
     * @return ExportAddressBookRequest
     */
    public function withExportOptions($ExportOptions)
    {
        $new = clone $this;
        $new->ExportOptions = $ExportOptions;

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
     * @return ExportAddressBookRequest
     */
    public function withAuthenticationDetails($AuthenticationDetails)
    {
        $new = clone $this;
        $new->AuthenticationDetails = $AuthenticationDetails;

        return $new;
    }


}

