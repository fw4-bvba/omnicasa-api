<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class ContactOnMeRequest extends Request
{
    const ENDPOINT = 'ContactOnMe';

    const PROPERTIES = [
        'Name'                     => 'string',
        'FirstName'                => 'string',
        'AddressTitle'             => 'string',
        'LetterTitle'              => 'string',
        'Address'                  => 'string',
        'City'                     => 'string',
        'Zip'                      => 'string',
        'Email'                    => 'string',
        'PhoneNumber'              => 'string',
        'GSM'                      => 'string',
        'IsReceivedEmail'          => 'boolean',
        'SiteId'                   => 'integer',
        'SourceId'                 => 'integer',
        'CountryId'                => 'integer',
        'IsCreatedDemand'          => 'boolean',
        'Goal'                     => 'integer',
        'TypeOfPropertyIDs'        => ['integer'],
        'GeographicIDs'            => ['integer'],
        'Purpose'                  => 'integer',
        'Budget'                   => 'numeric',
        'PriceMin'                 => 'numeric',
        'PriceMax'                 => 'numeric',
        'DemandComment'            => 'string',
        'Subject'                  => 'string',
        'Content'                  => 'string',
        'ObjectID'                 => 'integer',
        'Profession'               => 'string',
        'Categories'               => ['integer'],
        'LanguageIdFromParameter'  => 'integer',
        'AppointmentID'            => 'integer',
        'AgendaComment'            => 'string',
        'Fax'                      => 'string',
        'CustomStr1'               => 'string',
        'CustomStr2'               => 'string',
        'CustomStr3'               => 'string',
        'CustomStr4'               => 'string',
        'CustomStr5'               => 'string',
        'IsMergedDemandIfExisting' => 'boolean',
        'BoxNr'                    => 'string',
        'UseGps'                   => 'boolean',
        'GpsKm'                    => 'numeric',
        'GpsCityName'              => 'string',
        'WebIDs'                   => ['integer'],
        'PersonComment'            => 'string',
        'GeoCityIds'               => ['integer'],
        'RegionIds'                => ['integer'],
        'LanguageId'               => 'integer',
        'OfficeID'                 => 'integer',
    ];
}
