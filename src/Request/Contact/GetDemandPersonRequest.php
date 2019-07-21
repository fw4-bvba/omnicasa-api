<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class GetDemandPersonRequest extends Request
{
    const ENDPOINT = 'GetDemandPerson';

    const PROPERTIES = [
        'ID'             => 'integer',
        'DemandID'       => 'integer',
        'IDCrypt'        => 'string',
        'DemandIDCrypt'  => 'string',
        'IsExpired'      => 'boolean',
        'IsUnsubscribed' => 'boolean',
        'LanguageId'     => 'integer',
        'OfficeID'       => 'integer',
    ];
}
