<?php
namespace Omnicasa\Response;

abstract class ListResponse implements \Countable, \IteratorAggregate, \ArrayAccess
{
    public function __debugInfo(): array
    {
        return [
            'count' => $this->count()
        ];
    }

    abstract public function get(int $position): ResponseObject;

    /* IteratorAggregate implementation */

    public function getIterator(): ListResponseIterator
    {
        return new ListResponseIterator($this);
    }

    /* ArrayAccess implementation */

    public function offsetExists($offset): bool
    {
        if (!is_int($offset)) return false;
        return $offset < $this->count();
    }

    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        if (!$this->offsetExists($offset)) return null;
        return $this->get($offset);
    }

    public function offsetSet($offset, $value): void
    {
        throw new \Exception('offsetSet not implemented on ListResponse');
    }

    public function offsetUnset($offset): void
    {
        throw new \Exception('offsetUnset not implemented on ListResponse');
    }
}
