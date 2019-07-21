<?php
namespace Omnicasa\Response;

class ListResponseSimple extends ListResponse
{
    protected $items = [];

    public function __construct($response)
    {
        if (!is_array($response)) {
            if (!empty($response->Items) && is_array($response->Items)) $response = $response->Items;
            else $response = [];
        }
        foreach ($response as $item) {
            $this->items[] = new ResponseObject($item);
        }
    }

    public function get(int $position): ResponseObject
    {
        return $this->items[$position];
    }

    /* Countable implementation */

    public function count(): int
    {
        return count($this->items);
    }
}
