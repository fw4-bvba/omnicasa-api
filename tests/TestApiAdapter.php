<?php

namespace Omnicasa\Tests;

use Omnicasa\ApiAdapter;
use Omnicasa\Request\Request;

final class TestApiAdapter extends ApiAdapter
{
    protected $responseQueue = [];
    public $requestedRanges = [];

    public function queueResponse(string $body)
    {
        $this->responseQueue[] = $body;
    }

    public function queueResponseFromFile(string $filename)
    {
        $this->queueResponse(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'responses' . DIRECTORY_SEPARATOR . $filename));
    }

    public function queueResponseFromPaginatedFile(string $filename)
    {
        $pages = json_decode(file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'responses' . DIRECTORY_SEPARATOR . $filename), true);
        foreach ($pages as &$page) $this->queueResponse(json_encode($page));
    }

    public function getBody(Request $request): string
    {
        if ($request->accepts('Limit1') && $request->accepts('Limit2')) {
            $this->requestedRanges[] = [$request->limit1, $request->limit2];
        }
        return array_shift($this->responseQueue) ?? '';
    }
}
