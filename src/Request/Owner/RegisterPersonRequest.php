<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class RegisterPersonRequest extends Request
{
    const ENDPOINT = 'RegisterPerson';

    const PROPERTIES = [
        'Name'         => 'string',
        'FirstName'    => 'string',
        'Reference'    => 'string',
        'AddressTitle' => 'string',
        'Address'      => 'string',
        'City'         => 'string',
        'Zip'          => 'string',
        'Email'        => 'string',
        'Password'     => 'string',
        'PhoneNumber'  => 'string',
        'GSM'          => 'string',
        'SiteId'       => 'integer',
        'Profession'   => 'string',
        'IsInsertingPersonWithoutEmailAndPhone' => 'boolean',
        'Fax'                   => 'string',
        'CategorieIDs'          => ['integer'],
        'IsCreatedCategoryChat' => 'boolean',
        'IsReceivedEmail'       => 'boolean',
        'LanguageId'            => 'integer',
        'OfficeID'              => 'integer',
    ];
}
