<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonCountRequest extends Request
{
    const ENDPOINT = 'GetPersonCount';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'UserIDs'       => ['integer'],
        'SiteIDs'       => ['integer'],
        'CategoryIDs'   => ['integer'],
        'StartDate'     => 'DateTime',
        'EndDate'       => 'DateTime',
        'ModifiedDate'  => 'DateTime',
        'IsProprietorsOfActiveProperties' => 'boolean',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
