<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetNeighbourhoodListRequest extends Request
{
    const ENDPOINT = 'GetNeighbourhoodList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'Names'         => ['string'],
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
