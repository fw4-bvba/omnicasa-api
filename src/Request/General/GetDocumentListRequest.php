<?php
namespace Omnicasa\Request\General;

use Omnicasa\Request\Request;

class GetDocumentListRequest extends Request
{
    const ENDPOINT = 'GetDocumentList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'ObjectIDs'     => ['integer'],
        'PersonID'      => 'integer',
        'Publish'       => 'boolean',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
