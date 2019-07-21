<?php
namespace Omnicasa\Request\Construction;

use Omnicasa\Request\Request;

class GetBuildingListRequest extends Request
{
    const ENDPOINT = 'GetBuildingList';

    const PROPERTIES = [
        'ProjectID'                 => 'integer',
        'IsOnlyPublishedProperties' => 'boolean',
        'DisplayFields'             => ['string'],
        'SortFields'                => ['string'],
        'Limit1'                    => 'integer',
        'Limit2'                    => 'integer',
        'LanguageId'                => 'integer',
        'OfficeID'                  => 'integer',
    ];
}
