<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\Request;

class SaveChangedDemandListRequest extends Request
{
    const ENDPOINT = 'SaveChangedDemandList';

    const PROPERTIES = [
        'PersonID'               => 'integer',
        'InactiveDemandIds'      => ['integer'],
        'ChangedAndAddedDemands' => ['Omnicasa\Request\Contact\DemandEntry'],
        'LanguageId'             => 'integer',
        'OfficeID'               => 'integer',
    ];
}
