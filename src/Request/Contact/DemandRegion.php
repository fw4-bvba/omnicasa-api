<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\RequestObject;

class DemandRegion extends RequestObject
{
    const PROPERTIES = [
        'RegionType' => 'integer',
        'RegionDisp' => 'string',
        'RegionData' => 'string',
    ];
}
