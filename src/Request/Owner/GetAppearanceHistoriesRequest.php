<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetAppearanceHistoriesRequest extends Request
{
    const ENDPOINT = 'GetAppearanceHistories';

    const PROPERTIES = [
        'ObjectID'      => 'integer',
        'FromDate'      => 'DateTime',
        'ToDate'        => 'DateTime',
        'ProjectID'     => 'integer',
        'IncludeUnits'  => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
