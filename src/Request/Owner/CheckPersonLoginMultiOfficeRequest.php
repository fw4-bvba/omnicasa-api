<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class CheckPersonLoginMultiOfficeRequest extends Request
{
    const ENDPOINT = 'CheckPersonLoginMultiOffice';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'FaceBookID'    => 'string',
        'IsProprietors' => 'boolean',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
