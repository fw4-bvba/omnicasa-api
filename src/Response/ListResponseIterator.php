<?php
namespace Omnicasa\Response;

class ListResponseIterator implements \Iterator
{
    protected $response;
    protected $position = 0;

    public function __construct(ListResponse $response)
    {
        $this->response = $response;
    }

    /* Iterator implementation */

    public function current(): ?ResponseObject
    {
        return $this->response->get($this->position);
    }

    public function key(): int
    {
        return $this->position;
    }

    public function next()
    {
        $this->position++;
    }

    public function rewind()
    {
        $this->position = 0;
    }

    public function valid(): bool
    {
        return $this->position >= 0 && $this->position < $this->response->count();
    }
}
