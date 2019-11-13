<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetRelatedPropertiesRequest extends Request
{
    const ENDPOINT = 'GetRelatedProperties';

    const PROPERTIES = [
        'Email'         => 'string',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
