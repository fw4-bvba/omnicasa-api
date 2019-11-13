<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetVisitStatisticOfPropertyRequest extends Request
{
    const ENDPOINT = 'GetVisitStatisticOfProperty';

    const PROPERTIES = [
        'ID'            => 'integer',
        'DisplayFields' => ['string'],
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
