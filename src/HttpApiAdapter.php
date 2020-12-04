<?php
namespace Omnicasa;

use Omnicasa\Exception\ApiException;

final class HttpApiAdapter extends ApiAdapter
{
    private $httpClient;
    public $requestOptions = [];

    public function __construct()
    {
        $this->httpClient = new \GuzzleHttp\Client();
    }

    public function getBody(Request\Request $request): string
    {
        $version = \PackageVersions\Versions::getVersion('fw4/omnicasa-api');

        $parameters = $request->jsonSerialize();
        foreach ($this->defaultParams as $name => $value) {
            if ($request->accepts($name) && !isset($parameters[$name])) $parameters[$name] = $value;
        }

        $method = defined(get_class($request) . '::METHOD') ? $request::METHOD : 'GET';
        $service = defined(get_class($request) . '::SERVICE') ? $request::SERVICE : ApiService::OMNICASA;
        $options = [
            'http_errors' => false,
            'query' => ['json' => json_encode($parameters)],
            'headers' => [
                'User-Agent' => 'fw4-omnicasa-api/' . $version,
                'Accept'     => 'application/json',
            ],
        ];

        $http_request = new \GuzzleHttp\Psr7\Request($method, $service . $request::ENDPOINT . 'Json');
        $http_response = $this->httpClient->send($http_request, array_merge($this->requestOptions, $options));
        return $http_response->getBody()->getContents();
    }
}
