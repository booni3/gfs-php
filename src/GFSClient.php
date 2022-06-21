<?php

namespace Booni3\GFS;

use Booni3\GFS\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class GFSClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\FindUPSAccessPointRequest $parameters
     * @return ResultInterface|Type\FoundUPSAccessPoints
     * @throws SoapException
     */
    public function findUPSAccessPoints(\Booni3\GFS\Type\FindUPSAccessPointRequest $parameters) : \Booni3\GFS\Type\FoundUPSAccessPoints
    {
        return $this->call('FindUPSAccessPoints', $parameters);
    }

    /**
     * @param RequestInterface|Type\UPSLabelsRecoveryRequest $parameters
     * @return ResultInterface|Type\RecoveredUPSLabels
     * @throws SoapException
     */
    public function uPSLabelsRecovery(\Booni3\GFS\Type\UPSLabelsRecoveryRequest $parameters) : \Booni3\GFS\Type\RecoveredUPSLabels
    {
        return $this->call('UPSLabelsRecovery', $parameters);
    }

    /**
     * @param RequestInterface|Type\AuthDetails $parameters
     * @return ResultInterface|Type\CustRouteCodes
     * @throws SoapException
     */
    public function getCustRoutes(\Booni3\GFS\Type\AuthDetails $parameters) : \Booni3\GFS\Type\CustRouteCodes
    {
        return $this->call('GetCustRoutes', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedShipment $parameters
     * @return ResultInterface|Type\ProcessedShipment
     * @throws SoapException
     */
    public function processShipment(\Booni3\GFS\Type\RequestedShipment $parameters) : \Booni3\GFS\Type\ProcessedShipment
    {
        return $this->call('ProcessShipment', $parameters);
    }

    /**
     * @param RequestInterface|Type\CAOrders $parameters
     * @return ResultInterface|Type\CAShipments
     * @throws SoapException
     */
    public function getCAOrders(\Booni3\GFS\Type\CAOrders $parameters) : \Booni3\GFS\Type\CAShipments
    {
        return $this->call('GetCAOrders', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedShipments $parameters
     * @return ResultInterface|Type\ProcessedShipments
     * @throws SoapException
     */
    public function processShipments(\Booni3\GFS\Type\RequestedShipments $parameters) : \Booni3\GFS\Type\ProcessedShipments
    {
        return $this->call('ProcessShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedShipToGroup $parameters
     * @return ResultInterface|Type\ProcessedShipToGroup
     * @throws SoapException
     */
    public function shipToGroup(\Booni3\GFS\Type\RequestedShipToGroup $parameters) : \Booni3\GFS\Type\ProcessedShipToGroup
    {
        return $this->call('ShipToGroup', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedDeleteShipments $parameters
     * @return ResultInterface|Type\ProcessedDeleteShipments
     * @throws SoapException
     */
    public function deleteShipments(\Booni3\GFS\Type\RequestedDeleteShipments $parameters) : \Booni3\GFS\Type\ProcessedDeleteShipments
    {
        return $this->call('DeleteShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedCommitShipGroup $parameters
     * @return ResultInterface|Type\ProcessedCommitShipGroup
     * @throws SoapException
     */
    public function commitShipGroup(\Booni3\GFS\Type\RequestedCommitShipGroup $parameters) : \Booni3\GFS\Type\ProcessedCommitShipGroup
    {
        return $this->call('CommitShipGroup', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedCommitShipments $parameters
     * @return ResultInterface|Type\ProcessedCommitShipments
     * @throws SoapException
     */
    public function commitShipments(\Booni3\GFS\Type\RequestedCommitShipments $parameters) : \Booni3\GFS\Type\ProcessedCommitShipments
    {
        return $this->call('CommitShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedReports $parameters
     * @return ResultInterface|Type\ProcessedReports
     * @throws SoapException
     */
    public function processReports(\Booni3\GFS\Type\RequestedReports $parameters) : \Booni3\GFS\Type\ProcessedReports
    {
        return $this->call('ProcessReports', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedCarrierDispatch $parameters
     * @return ResultInterface|Type\ProcessedCarrierDispatch
     * @throws SoapException
     */
    public function processCarrierDispatch(\Booni3\GFS\Type\RequestedCarrierDispatch $parameters) : \Booni3\GFS\Type\ProcessedCarrierDispatch
    {
        return $this->call('ProcessCarrierDispatch', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedCancelCarrierDispatch $parameters
     * @return ResultInterface|Type\ProcessedCancelCarrierDispatch
     * @throws SoapException
     */
    public function cancelCarrierDispatch(\Booni3\GFS\Type\RequestedCancelCarrierDispatch $parameters) : \Booni3\GFS\Type\ProcessedCancelCarrierDispatch
    {
        return $this->call('CancelCarrierDispatch', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedLocation $parameters
     * @return ResultInterface|Type\FoundServices
     * @throws SoapException
     */
    public function findAvailableServices(\Booni3\GFS\Type\RequestedLocation $parameters) : \Booni3\GFS\Type\FoundServices
    {
        return $this->call('FindAvailableServices', $parameters);
    }

    /**
     * @param RequestInterface|Type\MachinesRequest $parameters
     * @return ResultInterface|Type\InPostMachines
     * @throws SoapException
     */
    public function findInPostMachines(\Booni3\GFS\Type\MachinesRequest $parameters) : \Booni3\GFS\Type\InPostMachines
    {
        return $this->call('FindInPostMachines', $parameters);
    }

    /**
     * @param RequestInterface|Type\DPDShopPostcode $parameters
     * @return ResultInterface|Type\AvailableDPDShops
     * @throws SoapException
     */
    public function findAvailableDPDShops(\Booni3\GFS\Type\DPDShopPostcode $parameters) : \Booni3\GFS\Type\AvailableDPDShops
    {
        return $this->call('FindAvailableDPDShops', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedPostcode $parameters
     * @return ResultInterface|Type\FoundPayPoints
     * @throws SoapException
     */
    public function findAvailablePayPoints(\Booni3\GFS\Type\RequestedPostcode $parameters) : \Booni3\GFS\Type\FoundPayPoints
    {
        return $this->call('FindAvailablePayPoints', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedCarrierLocation $parameters
     * @return ResultInterface|Type\ProcessedCarrierLocation
     * @throws SoapException
     */
    public function findCarrierLocation(\Booni3\GFS\Type\RequestedCarrierLocation $parameters) : \Booni3\GFS\Type\ProcessedCarrierLocation
    {
        return $this->call('FindCarrierLocation', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedAddress $parameters
     * @return ResultInterface|Type\ValidatedAddress
     * @throws SoapException
     */
    public function validateAddress(\Booni3\GFS\Type\RequestedAddress $parameters) : \Booni3\GFS\Type\ValidatedAddress
    {
        return $this->call('ValidateAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\ValidatingServices $parameters
     * @return ResultInterface|Type\ValidatedCarrierServices
     * @throws SoapException
     */
    public function laneFeasibility(\Booni3\GFS\Type\ValidatingServices $parameters) : \Booni3\GFS\Type\ValidatedCarrierServices
    {
        return $this->call('LaneFeasibility', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedValidateShipments $parameters
     * @return ResultInterface|Type\ValidatedShipments
     * @throws SoapException
     */
    public function validateShipments(\Booni3\GFS\Type\RequestedValidateShipments $parameters) : \Booni3\GFS\Type\ValidatedShipments
    {
        return $this->call('ValidateShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedValidateShipment $parameters
     * @return ResultInterface|Type\ValidatedShipment
     * @throws SoapException
     */
    public function validateShipment(\Booni3\GFS\Type\RequestedValidateShipment $parameters) : \Booni3\GFS\Type\ValidatedShipment
    {
        return $this->call('ValidateShipment', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckAddress $parameters
     * @return ResultInterface|Type\FoundAddress
     * @throws SoapException
     */
    public function checkUKAddress(\Booni3\GFS\Type\CheckAddress $parameters) : \Booni3\GFS\Type\FoundAddress
    {
        return $this->call('CheckUKAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedSearchAddress $parameters
     * @return ResultInterface|Type\FoundAddresses
     * @throws SoapException
     */
    public function searchAddress(\Booni3\GFS\Type\RequestedSearchAddress $parameters) : \Booni3\GFS\Type\FoundAddresses
    {
        return $this->call('SearchAddress', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedDailyQuery $parameters
     * @return ResultInterface|Type\ProcessedDailyQuery
     * @throws SoapException
     */
    public function dailyShipQuery(\Booni3\GFS\Type\RequestedDailyQuery $parameters) : \Booni3\GFS\Type\ProcessedDailyQuery
    {
        return $this->call('DailyShipQuery', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedSalesOrder $parameters
     * @return ResultInterface|Type\ProcessedRMSalesOrder
     * @throws SoapException
     */
    public function printRMSalesOrder(\Booni3\GFS\Type\RequestedSalesOrder $parameters) : \Booni3\GFS\Type\ProcessedRMSalesOrder
    {
        return $this->call('PrintRMSalesOrder', $parameters);
    }

    /**
     * @param RequestInterface|Type\RequestedManifest $parameters
     * @return ResultInterface|Type\ProcessedManifest
     * @throws SoapException
     */
    public function printManifest(\Booni3\GFS\Type\RequestedManifest $parameters) : \Booni3\GFS\Type\ProcessedManifest
    {
        return $this->call('PrintManifest', $parameters);
    }

    /**
     * @param RequestInterface|Type\UnlockServiceRequest $parameters
     * @return ResultInterface|Type\UnlockStatus
     * @throws SoapException
     */
    public function unlockService(\Booni3\GFS\Type\UnlockServiceRequest $parameters) : \Booni3\GFS\Type\UnlockStatus
    {
        return $this->call('UnlockService', $parameters);
    }

    /**
     * @param RequestInterface|Type\UploadShipmentsRequest $parameters
     * @return ResultInterface|Type\UploadShipmentsStatus
     * @throws SoapException
     */
    public function uploadShipments(\Booni3\GFS\Type\UploadShipmentsRequest $parameters) : \Booni3\GFS\Type\UploadShipmentsStatus
    {
        return $this->call('UploadShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\ReuploadShipmentsRequest $parameters
     * @return ResultInterface|Type\ReuploadShipmentsStatus
     * @throws SoapException
     */
    public function reuploadShipments(\Booni3\GFS\Type\ReuploadShipmentsRequest $parameters) : \Booni3\GFS\Type\ReuploadShipmentsStatus
    {
        return $this->call('ReuploadShipments', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImportAddressBookRequest $parameters
     * @return ResultInterface|Type\ImportAddressBookStatus
     * @throws SoapException
     */
    public function importAddressBook(\Booni3\GFS\Type\ImportAddressBookRequest $parameters) : \Booni3\GFS\Type\ImportAddressBookStatus
    {
        return $this->call('ImportAddressBook', $parameters);
    }

    /**
     * @param RequestInterface|Type\ImportGoodsRequest $parameters
     * @return ResultInterface|Type\ImportGoodsStatus
     * @throws SoapException
     */
    public function importGoods(\Booni3\GFS\Type\ImportGoodsRequest $parameters) : \Booni3\GFS\Type\ImportGoodsStatus
    {
        return $this->call('ImportGoods', $parameters);
    }

    /**
     * @param RequestInterface|Type\ExportGoodsRequest $parameters
     * @return ResultInterface|Type\ExportGoodsStatus
     * @throws SoapException
     */
    public function exportGoods(\Booni3\GFS\Type\ExportGoodsRequest $parameters) : \Booni3\GFS\Type\ExportGoodsStatus
    {
        return $this->call('ExportGoods', $parameters);
    }

    /**
     * @param RequestInterface|Type\ExportAddressBookRequest $parameters
     * @return ResultInterface|Type\ExportedAddressBook
     * @throws SoapException
     */
    public function exportAddressBook(\Booni3\GFS\Type\ExportAddressBookRequest $parameters) : \Booni3\GFS\Type\ExportedAddressBook
    {
        return $this->call('ExportAddressBook', $parameters);
    }

    /**
     * @param RequestInterface|Type\CheckUpdatesRequest $parameters
     * @return ResultInterface|Type\CheckUpdatesStatus
     * @throws SoapException
     */
    public function checkUpdates(\Booni3\GFS\Type\CheckUpdatesRequest $parameters) : \Booni3\GFS\Type\CheckUpdatesStatus
    {
        return $this->call('CheckUpdates', $parameters);
    }


}

