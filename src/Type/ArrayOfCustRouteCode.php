<?php

namespace Booni3\GFS\Type;

class ArrayOfCustRouteCode
{

    /**
     * @var \Booni3\GFS\Type\CustRouteCode
     */
    private $CustRouteCode;

    /**
     * @return \Booni3\GFS\Type\CustRouteCode
     */
    public function getCustRouteCode()
    {
        return $this->CustRouteCode;
    }

    /**
     * @param \Booni3\GFS\Type\CustRouteCode $CustRouteCode
     * @return ArrayOfCustRouteCode
     */
    public function withCustRouteCode($CustRouteCode)
    {
        $new = clone $this;
        $new->CustRouteCode = $CustRouteCode;

        return $new;
    }


}

