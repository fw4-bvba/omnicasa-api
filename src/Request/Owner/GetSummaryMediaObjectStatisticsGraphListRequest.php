<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetSummaryMediaObjectStatisticsGraphListRequest extends Request
{
    const ENDPOINT = 'GetSummaryMediaObjectStatisticsGraphList';

    const PROPERTIES = [
		'StartDate'         => 'DateTime',
		'EndDate'           => 'DateTime',
		'MediaIDs'          => ['integer'],
		'ObjectIDs'         => ['integer'],
        'Frequency'         => 'integer',
        'ProjectID'         => 'integer',
		'IncludeUnits'      => 'boolean',
        'LanguageId'        => 'integer',
        'OfficeID'          => 'integer',
    ];
}