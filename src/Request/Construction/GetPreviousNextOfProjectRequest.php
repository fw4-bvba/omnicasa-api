<?php
namespace Omnicasa\Request\Construction;

use Omnicasa\Request\Request;

class GetPreviousNextOfProjectRequest extends Request
{
    const ENDPOINT = 'GetPreviousNextOfProject';

    const PROPERTIES = [
        'ID'                    => 'integer',
        'ProjectOfficeID'       => 'integer',
        'Status'                => 'integer',
        'IsPublishInternet'     => 'boolean',
        'WebIDs'                => ['integer'],
        'GeoGraphicIDs'         => ['integer'],
        'StatusList'            => ['integer'],
        'SiteID'                => 'integer',
        'DescriptionLanguageId' => 'integer',
        'IsPublishWebsite'      => 'boolean',
        'ProvinceIDs'           => ['integer'],
        'PersonID'              => 'integer',
        'GPSSort'               => 'string',
        'LanguageId'            => 'integer',
        'OfficeID'              => 'integer',
    ];
}
