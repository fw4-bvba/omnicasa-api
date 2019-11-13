<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetRelationListRequest extends Request
{
    const ENDPOINT = 'GetRelationList';

    const PROPERTIES = [
        'TypeIDs'       => ['integer'],
        'ObjectID'      => 'integer',
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
