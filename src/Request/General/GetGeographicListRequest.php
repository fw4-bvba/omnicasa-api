<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetGeographicListRequest extends Request
{
    const ENDPOINT = 'GetGeographicList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'Level'         => 'integer',
        'WebIDs'        => ['integer'],
        'ParentIDs'     => ['integer'],
        'HasProperty'   => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
