<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetPropertyPictureListRequest extends Request
{
    const ENDPOINT = 'GetPropertyPictureList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'ObjectID'      => 'integer',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
