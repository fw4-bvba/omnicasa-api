<?php
namespace Omnicasa\Request\Settings;

use Omnicasa\Request\Request;

class GetWebIDListRequest extends Request
{
    const ENDPOINT = 'GetWebIDList';

    const PROPERTIES = [
        'WebIDs'             => ['int'],
        'ForSale'            => 'boolean',
        'ForRent'            => 'boolean',
        'HasProperty'        => 'boolean',
        'PropertyGoal'       => 'integer',
        'DisplayFields'      => ['string'],
        'SortFields'         => ['string'],
        'Limit1'             => 'integer',
        'Limit2'             => 'integer',
        'LanguageId'         => 'integer',
        'IncludeUnits'       => 'boolean',
        'IncludedNotPublish' => 'boolean',
        'OfficeID'           => 'integer',
    ];
}
