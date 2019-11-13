<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class CreateHistoryRequest extends Request
{
    const ENDPOINT = 'CreateHistory';

    const PROPERTIES = [
        'ObjectId'       => 'integer',
        'Email'          => 'string',
        'TypeId'         => 'integer',
        'MsgFileName'    => 'string',
        'MsgFileContent' => 'string',
        'UserID'         => 'integer',
        'Subject'        => 'string',
        'Content'        => 'string',
        'Date'           => 'DateTime',
        'LanguageId'     => 'integer',
        'OfficeID'       => 'integer',
    ];
}
