<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class RegisterPersonDemandRequest extends Request
{
    const ENDPOINT = 'RegisterPersonDemand';

    const PROPERTIES = [
        'Name'                    => 'string',
        'FirstName'               => 'string',
        'Address'                 => 'string',
        'City'                    => 'string',
        'Zip'                     => 'string',
        'Email'                   => 'string',
        'PhoneNumber'             => 'string',
        'Types'                   => ['integer'],
        'PriceMin'                => 'numeric',
        'PriceMax'                => 'numeric',
        'GpsKm'                   => 'numeric',
        'GpsCityName'             => 'string',
        'SiteId'                  => 'integer',
        'LanguageIdFromParameter' => 'integer',
        'IsReceivedEmail'         => 'boolean',
        'LanguageId'              => 'integer',
        'OfficeID'                => 'integer',
    ];
}
