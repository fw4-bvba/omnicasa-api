<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetHistoriesTypeRequest extends Request
{
    const ENDPOINT = 'GetHistoriesType';

    const PROPERTIES = [
        'ID'            => 'integer',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
