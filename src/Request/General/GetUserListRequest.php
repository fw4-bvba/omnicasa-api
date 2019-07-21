<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetUserListRequest extends Request
{
    const ENDPOINT = 'GetUserList';

    const PROPERTIES = [
        'IDs'                => ['integer'],
        'DepartmentID'       => 'integer',
        'SiteIDs'            => ['integer'],
        'IncludeHiddenOnWeb' => 'boolean',
        'DisplayFields'      => ['string'],
        'SortFields'         => ['string'],
        'Limit1'             => 'integer',
        'Limit2'             => 'integer',
        'LanguageId'         => 'integer',
        'OfficeID'           => 'integer',
    ];
}
