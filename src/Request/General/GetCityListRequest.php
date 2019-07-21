<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetCityListRequest extends Request
{
    const ENDPOINT = 'GetCityList';

    const PROPERTIES = [
        'HasProperty'            => 'boolean',
        'CityNameSearchBy'       => 'string',
        'PostCodeSearchBy'       => 'string',
        'NameOrPostCodeSearchBy' => 'string',
        'SubstatusList'          => ['integer'],
        'DisplayFields'          => ['string'],
        'SortFields'             => ['string'],
        'Limit1'                 => 'integer',
        'Limit2'                 => 'integer',
        'LanguageId'             => 'integer',
        'OfficeID'               => 'integer',
    ];
}
