<?php
namespace Omnicasa\Request\Internal;

use Omnicasa\Request\Request;

class GetInternalProjectListRequest extends Request
{
    const ENDPOINT = 'GetInternalProjectList';

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
    ];
}
