<?php
namespace Omnicasa\Request\Construction;

use Omnicasa\Request\Request;

class GetProjectRequest extends Request
{
    const ENDPOINT = 'GetProject';

    const PROPERTIES = [
        'Status'                       => 'integer',
        'StatusList'                   => ['integer'],
        'DescriptionLanguageId'        => 'integer',
        'IsPublishWebsite'             => 'boolean',
        'IsRemovedFontFamily'          => 'boolean',
        'UpdateVisit'                  => 'boolean',
        'RealClientIp'                 => 'string',
        'IsPublishedAllDocumentStatus' => 'boolean',
        'ID'                           => 'integer',
        'DisplayFields'                => ['string'],
        'LanguageId'                   => 'integer',
        'OfficeID'                     => 'integer',
    ];
}
