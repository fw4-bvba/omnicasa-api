<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetUserRequest extends Request
{
    const ENDPOINT = 'GetUser';

    const PROPERTIES = [
        'ID'            => 'integer',
        'DisplayFields' => ['string'],
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
