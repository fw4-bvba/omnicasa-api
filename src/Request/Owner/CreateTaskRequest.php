<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class CreateTaskRequest extends Request
{
    const ENDPOINT = 'CreateTask';

    const PROPERTIES = [
        'PersonID'               => 'integer',
        'ObjectId'               => 'integer',
        'DemandID'               => 'integer',
        'Subject'                => 'string',
        'Comment'                => 'string',
        'LanguageId'             => 'integer',
        'OfficeID'               => 'integer',
        'IncludeUnits'           => 'boolean',
        'IncludedNotPublish'     => 'boolean',
        'IsRemovedCommentPrefix' => 'boolean',
        'TaskTypeID'             => 'integer',
        'UserID'                 => 'integer',
    ];
}
