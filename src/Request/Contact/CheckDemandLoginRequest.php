<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class CheckDemandLoginRequest extends Request
{
    const ENDPOINT = 'CheckDemandLogin';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'FaceBookID'    => 'string',
        'IsProprietors' => 'boolean',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
