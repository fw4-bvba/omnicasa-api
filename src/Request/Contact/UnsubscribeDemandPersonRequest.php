<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class UnsubscribeDemandPersonRequest extends Request
{
    const ENDPOINT = 'UnsubscribeDemandPerson';

    const PROPERTIES = [
        'ID'              => 'integer',
        'DemandID'        => 'integer',
        'PersonIDEncrypt' => 'string',
        'DemandIDEncrypt' => 'string',
        'LanguageId'      => 'integer',
        'OfficeID'        => 'integer',
    ];
}
