<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetCategoriesListRequest extends Request
{
    const ENDPOINT = 'GetCategoriesList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
