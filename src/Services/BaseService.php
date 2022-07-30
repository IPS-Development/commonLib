<?php

namespace IPS\Common\Services;

use Illuminate\Support\Facades\DB;

class BaseService
{
    protected $service_code;

    private $service_table = 'system_settings';

    /**
     * @param $service_code
     */
    public function __construct($service_code)
    {
        $this->service_code = $service_code;
    }

    public function getSettings()
    {
        $record = DB::table($this->service_table)->where('item', $this->service_code)->first();
        return $record ? json_decode($record->value, true) : [];
    }

}