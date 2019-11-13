<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonRelationsRequest extends Request
{
    const ENDPOINT = 'GetPersonRelations';

    const PROPERTIES = [
        'Email'         => 'string',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
