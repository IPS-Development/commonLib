<?php

namespace IPS\Common\Facades;

class IntegrationServiceFacade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor() {
        return 'integrationservice';
    }
}