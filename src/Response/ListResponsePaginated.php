<?php
namespace Omnicasa\Response;

use Omnicasa\Request\Request;
use Omnicasa\ApiAdapterInterface;

class ListResponsePaginated extends ListResponse
{
    const DEFAULT_ROWS_PER_PAGE = 50;

    protected $buffer;
    protected $bufferPosition;

    public function __construct(Request $request, ApiAdapterInterface $api_adapter, int $per_page = self::DEFAULT_ROWS_PER_PAGE)
    {
        $this->buffer = new ListResponseBuffer($request, $api_adapter, $per_page);
    }

    public function get(int $position): ResponseObject
    {
        return $this->buffer->get($position);
    }

    /* Countable implementation */

    public function count(): int
    {
        return $this->buffer->getTotalRowCount();
    }
}
