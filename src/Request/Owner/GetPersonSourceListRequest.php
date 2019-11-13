<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonSourceListRequest extends Request
{
    const ENDPOINT = 'GetPersonSourceList';

    const PROPERTIES = [
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
