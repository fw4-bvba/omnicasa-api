<?php
namespace Omnicasa\Response;

use Omnicasa\Exception\ApiException;
use Omnicasa\Request\Request;
use Omnicasa\ApiAdapterInterface;

final class ListResponseBuffer
{
    protected $request;
    protected $apiAdapter;
    protected $buffer;
    protected $rowCount;
    protected $perPage;
    protected $page;

    public function __construct(Request $request, ApiAdapterInterface $api_adapter, int $per_page = 50)
    {
        $this->request = $request;
        $this->apiAdapter = $api_adapter;
        $this->perPage = $per_page;

        $this->bufferPage(0);
    }

    public function getTotalRowCount(): int
    {
        return $this->rowCount;
    }

    public function get(int $position): ResponseObject
    {
        if ($this->perPage) {
            if (!$this->isBuffered($position)) {
                $this->bufferPage(floor($position / $this->perPage));
            }
            return $this->buffer[$position % $this->perPage];
        } else {
            return $this->buffer[$position];
        }
    }

    protected function bufferPage(int $page)
    {
        if ($this->page === $page) return;
        $this->page = $page;

        $this->request->limit1 = $this->perPage * $page + 1;
        $this->request->limit2 = $this->perPage * ($page + 1);
        $response = $this->apiAdapter->request($this->request);

        if (!property_exists($response, 'Items') || !isset($response->RowsCount)) {
            throw new ApiException($this->request::ENDPOINT . ' gave unexpected response: ' . json_encode($response));
        }

        $this->buffer = [];
        $this->current = 0;
        $this->rowCount = $response->RowsCount;
        foreach ($response->Items as $row) {
            $this->buffer[] = new ResponseObject($row);
        }
    }

    protected function isBuffered(int $position): bool
    {
        $first_position = $this->perPage * $this->page;
        return ($position >= $first_position && $position < $first_position + count($this->buffer));
    }
}
