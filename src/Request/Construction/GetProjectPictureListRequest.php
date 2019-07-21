<?php
namespace Omnicasa\Request\Construction;

use Omnicasa\Request\Request;

class GetProjectPictureListRequest extends Request
{
    const ENDPOINT = 'GetProjectPictureList';

    const PROPERTIES = [
        'IDs'           => ['integer'],
        'ProjectID'     => 'integer',
        'Type'          => 'integer',
        'DisplayFields' => ['string'],
        'SortFields'    => ['string'],
        'Limit1'        => 'integer',
        'Limit2'        => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}
