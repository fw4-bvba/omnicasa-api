<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetAppointmentOfStatisticsGraphListRequest extends Request
{
    const ENDPOINT = 'GetAppointmentOfStatisticsGraphList';

    const PROPERTIES = [
		'StartDate'          => 'DateTime',
		'EndDate'            => 'DateTime',
		'ObjectIDs'          => ['integer'],
        'AppointmentIDs'     => ['integer'],
        'AppointmentTypeIDs' => ['integer'],
        'Frequency'          => 'integer',
        'ProjectID'          => 'integer',
		'IncludeUnits'       => 'boolean',
        'LanguageId'         => 'integer',
        'OfficeID'           => 'integer',
    ];
}