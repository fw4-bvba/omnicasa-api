<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetCityListOfObjectsRequest extends Request
{
    const ENDPOINT = 'GetCityListOfObjects';

    const PROPERTIES = [
        'Goal'               => 'integer',
        'WebIDs'             => ['integer'],
        'DisplayFields'      => ['string'],
        'SortFields'         => ['string'],
        'IsExcludedProject'  => 'boolean',
        'IsIncludedEmptyZip' => 'boolean',
        'StatusList'         => ['integer'],
        'CountryIds'         => ['integer'],
        'IsInCountryOrNot'   => 'boolean',
        'LanguageId'         => 'integer',
        'OfficeID'           => 'integer',
    ];
}
