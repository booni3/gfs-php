<?php

namespace Booni3\GFS;

use Booni3\GFS\GFSClient;
use Booni3\GFS\GFSClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;

class GFSClientFactory
{

    public static function factory(string $wsdl) : \Booni3\GFS\GFSClient
    {
        $engine = ExtSoapEngineFactory::fromOptions(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(GFSClassmap::getCollection())
        );
        $eventDispatcher = new EventDispatcher();

        return new GFSClient($engine, $eventDispatcher);
    }


}

