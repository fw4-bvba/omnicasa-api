<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetCountryListRequest extends Request
{
    const ENDPOINT = 'GetCountryList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'InIDsOrNot'    => 'boolean',
        'HasProperty'   => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
