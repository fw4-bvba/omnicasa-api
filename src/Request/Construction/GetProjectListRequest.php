<?php
namespace Omnicasa\Request\Construction;

use Omnicasa\Request\Request;

class GetProjectListRequest extends Request
{
    const ENDPOINT = 'GetProjectList';

    const PROPERTIES = [
        'Status'                       => 'integer',
        'IsPublishInternet'            => 'boolean',
        'WebIDs'                       => ['integer'],
        'GeoGraphicIDs'                => ['integer'],
        'StatusList'                   => ['integer'],
        'SubstatusList'                => ['integer'],
        'SiteID'                       => 'integer',
        'DescriptionLanguageId'        => 'integer',
        'IsPublishWebsite'             => 'boolean',
        'ProvinceIDs'                  => ['integer'],
        'PersonID'                     => 'integer',
        'IsRemovedFontFamily'          => 'boolean',
        'GPSSort'                      => 'string',
        'CountryIDs'                   => ['integer'],
        'IsPublishedAllDocumentStatus' => 'boolean',
        'DisplayFields'                => ['string'],
        'SortFields'                   => ['string'],
        'Limit1'                       => 'integer',
        'Limit2'                       => 'integer',
        'LanguageId'                   => 'integer',
        'OfficeID'                     => 'integer',
        'EncodePolygonPath'            => 'string',
        'GeoCityIds'                   => ['integer'],
        'Goal'                         => 'integer',
        'GpsAddress'                   => 'string',
        'GpsRadius'                    => 'float',
        'GpsX'                         => 'float',
        'GpsY'                         => 'float',
        'IncludeUnits'                 => 'boolean',
        'IncludedNotPublish'           => 'boolean',
        'RegionIds'                    => ['integer'],
        'Zips'                         => ['string'],
    ];
}
