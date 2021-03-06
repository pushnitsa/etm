<?php

namespace ETM\AppBundle\Types;

class GetAirFareRQ extends BaseType
{
    protected $Security;
    protected $RequestId;

    public function __construct(Security $security, $requestId)
    {
        $this->Security = $security;
        $this->RequestId = $requestId;
    }
}