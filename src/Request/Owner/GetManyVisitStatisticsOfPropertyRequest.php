<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetManyVisitStatisticsOfPropertyRequest extends Request
{
    const ENDPOINT = 'GetManyVisitStatisticsOfProperty';

    const PROPERTIES = [
        'ID'                => 'integer',
        'ProjectID'         => 'integer',
        'IsGroupAllPortals' => 'boolean',
        'IncludeUnits'      => 'boolean',
        'LanguageId'        => 'integer',
        'OfficeID'          => 'integer',
    ];
}
