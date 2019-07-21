<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetPropertiesByIDsRequest extends Request
{
    const ENDPOINT = 'GetPropertiesByIDs';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'DisplayFields' => ['string'],
        'StatusList'    => ['integer'],
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
