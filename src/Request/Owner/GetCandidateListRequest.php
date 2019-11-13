<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetCandidateListRequest extends Request
{
    const ENDPOINT = 'GetCandidateList';

    const PROPERTIES = [
        'ObjectID'      => 'integer',
        'ProjectID'     => 'integer',
        'Filter'        => 'integer',
        'IncludeUnits'  => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
