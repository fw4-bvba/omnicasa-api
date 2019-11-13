<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class CheckPersonLoginRequest extends Request
{
    const ENDPOINT = 'CheckPersonLogin';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'FaceBookID'    => 'string',
        'IsProprietors' => 'boolean',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
