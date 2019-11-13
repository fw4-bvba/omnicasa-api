<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPropertyCheckListRequest extends Request
{
    const ENDPOINT = 'GetPropertyCheckList';

    const PROPERTIES = [
        'ObjectID'      => 'integer',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
