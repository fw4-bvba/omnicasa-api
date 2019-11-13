<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetCalendarHistoriesRequest extends Request
{
    const ENDPOINT = 'GetCalendarHistories';

    const PROPERTIES = [
        'ObjectID'      => 'integer',
        'ProjectID'     => 'integer',
        'PersonIDs'     => ['integer'],
        'FromDate'      => 'DateTime',
        'ToDate'        => 'DateTime',
        'TypeIDs'       => ['integer'],
        'IncludeUnits'  => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
