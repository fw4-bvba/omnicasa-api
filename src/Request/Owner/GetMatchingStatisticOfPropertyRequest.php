<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetMatchingStatisticOfPropertyRequest extends Request
{
    const ENDPOINT = 'GetMatchingStatisticOfProperty';

    const PROPERTIES = [
        'ID'                => 'integer',
        'ProjectID'         => 'integer',
        'DisplayFields'     => ['string'],
        'IncludeUnits'      => 'boolean',
        'LanguageId'        => 'integer',
        'OfficeID'          => 'integer',
    ];
}
