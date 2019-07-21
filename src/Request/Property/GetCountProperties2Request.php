<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetCountProperties2Request extends Request
{
    const ENDPOINT = 'GetCountProperties2';

    const PROPERTIES = [
        'ProjectStatusIds' => ['integer'],
        'CountConditions'  => ['Omnicasa\Request\Property\CountPropertyCondition'],
        'MainTypeIDs'      => ['integer'],
        'GeoCityIds'       => ['integer'],
        'RegionIds'        => ['integer'],
        'LanguageId'       => 'integer',
        'OfficeID'         => 'integer',
    ];

    public function addCondition(array $params)
    {
        $this->add('CountConditions', new CountPropertyCondition($params));
        return $this;
    }
}
