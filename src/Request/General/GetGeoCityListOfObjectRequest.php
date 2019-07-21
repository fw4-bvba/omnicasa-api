<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetGeoCityListOfObjectRequest extends Request
{
    const ENDPOINT = 'GetGeoCityListOfObject';

    const PROPERTIES = [
        'Goal'               => 'integer',
        'WebIDs'             => ['integer'],
        'SortFields'         => ['string'],
        'StatusList'         => ['integer'],
        'LanguageId'         => 'integer',
        'OfficeID'           => 'integer',
    ];
}
