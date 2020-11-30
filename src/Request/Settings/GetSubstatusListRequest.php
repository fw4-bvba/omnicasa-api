<?php
namespace Omnicasa\Request\Settings;

use Omnicasa\Request\Request;

class GetSubstatusListRequest extends Request
{
    const ENDPOINT = 'GetSubstatusList';

    const PROPERTIES = [
        'ShowOnWeb'     => 'boolean',
        'HasMarquee'    => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
