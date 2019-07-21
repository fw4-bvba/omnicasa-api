<?php
namespace Omnicasa;

use Omnicasa\Exception\ApiException;

abstract class ApiAdapter implements ApiAdapterInterface
{
    protected $defaultParams = [];

    public function setDefaultParams(array $params): ApiAdapterInterface
    {
        $this->defaultParams = $params;
        return $this;
    }

    public function request(Request\Request $request)
    {
        $http_body = $this->getBody($request);
        $json_body = json_decode($http_body, false);

        $result = $json_body->{$request::ENDPOINT . 'JsonResult'} ?? $json_body;
        if (is_array($result)) return $result;
        if (json_last_error() !== \JSON_ERROR_NONE || !isset($result->Success) || !property_exists($result, 'Value')) throw new ApiException($request::ENDPOINT . ' gave unexpected response: ' . $http_body);
        if (!$result->Success) throw new ApiException($request::ENDPOINT . ' returned error: ' . $result->Message);

        return $result->Value;
    }
}
