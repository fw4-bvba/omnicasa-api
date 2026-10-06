<?php
namespace Omnicasa\Response;

use Omnicasa\Request\Request;
use Omnicasa\ApiAdapterInterface;
use Omnicasa\Exception\ApiException;

class ListResponsePaginated extends ListResponse
{
    const DEFAULT_ROWS_PER_PAGE = 50;

    protected $bufferedPage;
    protected $pageSize;
    protected $request;
    protected $apiAdapter;

    public function __construct(Request $request, ApiAdapterInterface $api_adapter, int $per_page = self::DEFAULT_ROWS_PER_PAGE)
    {
        if ($per_page < 1) {
            throw new \InvalidArgumentException('Page size must be a positive integer.');
        }

        $this->request = clone $request;
        $this->apiAdapter = $api_adapter;
        $this->pageSize = $per_page;
    }

    public function page(int $page, int $perPage = self::DEFAULT_ROWS_PER_PAGE): ListResponsePage
    {
        if ($page < 1 || $perPage < 1) {
            throw new \InvalidArgumentException('Page and page size must be positive integers.');
        }

        $request = clone $this->request;
        $request->limit1 = ($page - 1) * $perPage + 1;
        $request->limit2 = $page * $perPage;
        $response = $this->apiAdapter->request($request);

        if (!property_exists($response, 'Items') || !isset($response->RowsCount)) {
            throw new ApiException($request::ENDPOINT . ' gave unexpected response: ' . json_encode($response));
        }

        return new ListResponsePage($response->Items, $page, $perPage, $response->RowsCount);
    }

    public function get(int $position): ResponseObject
    {
        $page = intdiv($position, $this->pageSize) + 1;
        if ($this->bufferedPage()->getPage() !== $page) {
            $this->bufferedPage = $this->page($page, $this->pageSize);
        }

        return $this->bufferedPage->get($position % $this->pageSize);
    }

    /* Countable implementation */

    public function count(): int
    {
        return $this->bufferedPage()->getTotalCount();
    }

    protected function bufferedPage(): ListResponsePage
    {
        if ($this->bufferedPage === null) {
            $this->bufferedPage = $this->page(1, $this->pageSize);
        }

        return $this->bufferedPage;
    }
}
