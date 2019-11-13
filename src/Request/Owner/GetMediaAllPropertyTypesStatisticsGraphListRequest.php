<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetMediaAllPropertyTypesStatisticsGraphListRequest extends Request
{
    const ENDPOINT = 'GetMediaAllPropertyTypesStatisticsGraphList';

    const PROPERTIES = [
		'StartDate'         => 'DateTime',
		'EndDate'           => 'DateTime',
		'MediaIDs'          => ['integer'],
		'ObjectIDs'         => ['integer'],
        'ProjectID'         => 'integer',
		'IsGroupAllPortals' => 'boolean',
		'IncludeUnits'      => 'boolean',
        'DisplayFields'     => ['string'],
        'SortFields'        => ['string'],
        'Limit1'            => 'integer',
        'Limit2'            => 'integer',
        'LanguageId'        => 'integer',
        'OfficeID'          => 'integer',
    ];
}