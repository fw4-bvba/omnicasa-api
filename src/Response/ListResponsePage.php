<?php
namespace Omnicasa\Response;

class ListResponsePage extends ListResponseSimple
{
    protected $page;
    protected $pageSize;
    protected $totalCount;

    public function __construct(array $items, int $page, int $pageSize, int $totalCount)
    {
        parent::__construct($items);
        $this->page = $page;
        $this->pageSize = $pageSize;
        $this->totalCount = $totalCount;
    }

    public function getPage(): int
    {
        return $this->page;
    }

    public function getPageSize(): int
    {
        return $this->pageSize;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function getPageCount(): int
    {
        return (int) ceil($this->totalCount / $this->pageSize);
    }
}
