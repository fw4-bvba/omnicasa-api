<?php
namespace Omnicasa\Response;

abstract class ListResponse implements \Countable, \IteratorAggregate
{
    public function __debugInfo(): array
    {
        return [
            'count' => $this->count()
        ];
    }

    /* IteratorAggregate implementation */

    public function getIterator(): ListResponseIterator
    {
        return new ListResponseIterator($this);
    }
}
