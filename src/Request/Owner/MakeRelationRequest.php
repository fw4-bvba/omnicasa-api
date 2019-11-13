<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class MakeRelationRequest extends Request
{
    const ENDPOINT = 'MakeRelation';

    const PROPERTIES = [
        'PersonID'         => 'integer',
        'PersonRelationID' => 'integer',
        'RelationID'       => 'integer',
        'LanguageId'       => 'integer',
        'OfficeID'         => 'integer',
    ];
}
