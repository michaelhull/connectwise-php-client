<?php

namespace Spinen\ConnectWise\Models\Marketing;

use Spinen\ConnectWise\Support\Model;

class CampaignLinksClicked extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'campaignId' => 'integer',
        'contactId' => 'integer',
        'dateClicked' => 'carbon',
        'url' => 'string',
        'queryString' => 'string',
    ];
}
