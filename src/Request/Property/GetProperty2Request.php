<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetProperty2Request extends Request
{
    const ENDPOINT = 'GetProperty2';

    const PROPERTIES = [
        'AddCompositionField'          => 'boolean',
        'UpdateVisit'                  => 'boolean',
        'StatusList'                   => ['integer'],
        'LoggedInPersonId'             => 'integer',
        'IncludesSameProperties'       => 'boolean',
        'OZAAMID'                      => 'integer',
        'SortDivisionFields'           => ['string'],
        'DescriptionLanguageId'        => 'integer',
        'RealClientIp'                 => 'string',
        'IsRemovedFontFamily'          => 'boolean',
        'GeoCityIds'                   => ['integer'],
        'RegionIds'                    => ['integer'],
        'IsPublishedAllDocumentStatus' => 'boolean',
        'ID'                           => 'integer',
        'DisplayFields'                => ['string'],
        'LanguageId'                   => 'integer',
        'OfficeID'                     => 'integer',
    ];
}
