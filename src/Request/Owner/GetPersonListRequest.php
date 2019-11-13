<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class GetPersonListRequest extends Request
{
    const ENDPOINT = 'GetPersonList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'UserIDs'       => ['integer'],
        'SiteIDs'       => ['integer'],
        'CategoryIDs'   => ['integer'],
        'StartDate'     => 'DateTime',
        'EndDate'       => 'DateTime',
        'ModifiedDate'  => 'DateTime',
        'IsProprietorsOfActiveProperties' => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
