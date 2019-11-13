<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonByEmailRequest extends Request
{
    const ENDPOINT = 'GetPersonByEmail';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'ID'            => 'integer',
        'DisplayFields' => ['string'],
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
