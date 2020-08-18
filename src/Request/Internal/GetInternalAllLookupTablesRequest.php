<?php
namespace Omnicasa\Request\Internal;

use Omnicasa\Request\Request;

class GetInternalAllLookupTablesRequest extends Request
{
    const ENDPOINT = 'GetInternalAllLookupTables';

    const PROPERTIES = [
        'TableNames' => 'string',
    ];
}
