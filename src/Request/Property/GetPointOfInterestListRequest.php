<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetPointOfInterestListRequest extends Request
{
    const ENDPOINT = 'GetPointOfInterestList';

    const PROPERTIES = [
        'DisplayFields'                => ['string'],
        'SortFields'                   => ['string'],
        'Limit1'                       => 'integer',
        'Limit2'                       => 'integer',
        'LanguageId'                   => 'integer',
        'OfficeID'                     => 'integer',
    ];
}
