<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class GetDemandListRequest extends Request
{
    const ENDPOINT = 'GetDemandList';

    const PROPERTIES = [
        'Email'         => 'string',
        'Password'      => 'string',
        'Zips'          => ['string'],
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
