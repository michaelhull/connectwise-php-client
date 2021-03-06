<?php

namespace Spinen\ConnectWise\Models\Procurement;

use Spinen\ConnectWise\Support\Model;

class PricingSchedule extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'inactiveFlag' => 'boolean',
        'defaultFlag' => 'boolean',
        'companies' => 'array',
        'setAllCompaniesFlag' => 'boolean',
        'removeAllCompaniesFlag' => 'boolean',
    ];
}
