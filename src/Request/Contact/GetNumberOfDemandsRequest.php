<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class GetNumberOfDemandsRequest extends Request
{
    const ENDPOINT = 'GetNumberOfDemands';

    const PROPERTIES = [
        'PriceMin'   => 'numeric',
        'PriceMax'   => 'numeric',
        'GeoIDs'     => ['integer'],
        'WebIDs'     => ['integer'],
        'LanguageId' => 'integer',
        'OfficeID'   => 'integer',
    ];
}
