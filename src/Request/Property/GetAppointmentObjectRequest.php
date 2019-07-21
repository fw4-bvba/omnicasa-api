<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetAppointmentObjectRequest extends Request
{
    const ENDPOINT = 'GetAppointmentObject';

    const PROPERTIES = [
        'SiteIDs'    => ['integer'],
        'ObjectID'   => 'integer',
        'LanguageId' => 'integer',
    ];
}
