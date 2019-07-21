<?php
namespace Omnicasa\Request\Property;

use Omnicasa\Request\Request;

class GetCountPropertiesRequest extends Request
{
    const ENDPOINT = 'GetCountProperties';

    const PROPERTIES = [
        'CountConditions' => ['Omnicasa\Request\Property\CountPropertyCondition'],
        'MainTypeIDs'     => ['integer'],
        'RegionIds'       => ['integer'],
        'LanguageId'      => 'integer',
        'OfficeID'        => 'integer',
    ];

    public function addCondition(array $params)
    {
        $this->add('CountConditions', new CountPropertyCondition($params));
        return $this;
    }
}
