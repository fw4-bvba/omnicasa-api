<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetPropertyRequest extends Request
{
    const ENDPOINT = 'GetProperty';

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
