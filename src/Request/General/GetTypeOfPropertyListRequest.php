<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetTypeOfPropertyListRequest extends Request
{
    const METHOD = 'GET';
    const ENDPOINT = 'GetTypeOfPropertyList';

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
