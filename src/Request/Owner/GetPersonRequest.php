<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonRequest extends Request
{
    const ENDPOINT = 'GetPerson';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'ID'            => 'integer',
        'DisplayFields' => ['string'],
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
