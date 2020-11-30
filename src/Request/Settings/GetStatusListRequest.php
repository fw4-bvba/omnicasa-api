<?php
namespace Omnicasa\Request\Settings;

use Omnicasa\Request\Request;

class GetStatusListRequest extends Request
{
    const ENDPOINT = 'GetStatusList';

    const PROPERTIES = [
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
