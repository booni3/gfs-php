<?php

namespace Booni3\GFS\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ValidatingServices implements RequestInterface
{

    /**
     * @var \Booni3\GFS\Type\ValidatingCarrierServices
     */
    private $ValidatingServices;

    /**
     * Constructor
     *
     * @var \Booni3\GFS\Type\ValidatingCarrierServices $ValidatingServices
     */
    public function __construct($ValidatingServices)
    {
        $this->ValidatingServices = $ValidatingServices;
    }

    /**
     * @return \Booni3\GFS\Type\ValidatingCarrierServices
     */
    public function getValidatingServices()
    {
        return $this->ValidatingServices;
    }

    /**
     * @param \Booni3\GFS\Type\ValidatingCarrierServices $ValidatingServices
     * @return ValidatingServices
     */
    public function withValidatingServices($ValidatingServices)
    {
        $new = clone $this;
        $new->ValidatingServices = $ValidatingServices;

        return $new;
    }


}

