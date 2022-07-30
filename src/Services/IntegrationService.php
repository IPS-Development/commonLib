<?php

namespace IPS\Common\Services;

class IntegrationService
{

    private $agreement;

    private $businessPartner;

    public function __construct(AgreementService $agreement, BusinessPartnerService $businessPartner)
    {
        $this->agreement = $agreement;
        $this->businessPartner = $businessPartner;
    }

}