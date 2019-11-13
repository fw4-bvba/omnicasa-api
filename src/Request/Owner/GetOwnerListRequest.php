<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetOwnerListRequest extends Request
{
    const ENDPOINT = 'GetOwnerList';

    const PROPERTIES = [
        'ProjectID'     => 'integer',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
