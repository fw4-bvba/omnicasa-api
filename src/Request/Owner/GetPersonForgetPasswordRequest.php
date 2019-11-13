<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonForgetPasswordRequest extends Request
{
    const ENDPOINT = 'GetPersonForgetPassword';

    const PROPERTIES = [
        'Email'         => 'string',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
