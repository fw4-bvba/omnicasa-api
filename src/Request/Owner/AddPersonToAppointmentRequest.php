<?php
namespace Omnicasa\Request\Owner;

use Omnicasa\Request\Request;

class AddPersonToAppointmentRequest extends Request
{
    const ENDPOINT = 'AddPersonToAppointment';

    const PROPERTIES = [
        'PersonID'      => 'integer',
		'AppointmentID' => 'integer',
        'LanguageId'    => 'integer',
        'OfficeID'      => 'integer',
    ];
}