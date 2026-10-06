<?php

namespace Omnicasa\Tests;

use Omnicasa\Omnicasa;
use Omnicasa\Exception\ApiException;
use PHPUnit\Framework\TestCase;

class OmnicasaTest extends TestCase
{
    protected $api;
    protected $adapter;

    protected function setUp(): void
    {
        parent::setUp();

        $this->adapter = new TestApiAdapter();
        $this->api = new Omnicasa('test', 'test');
        $this->api->setApiAdapter($this->adapter);
    }

    // API adapter tests

    public function testInvalidJson()
    {
        $this->adapter->queueResponse('invalid');
        $this->expectException(ApiException::class);
        $this->api->validateCustomer();
    }

    public function testExceptionMessage()
    {
        $this->adapter->queueResponseFromFile('ExceptionMessage.json');
        $this->expectException(ApiException::class);
        $this->api->validateCustomer();
    }

    public function testInvalidResponse()
    {
        $this->adapter->queueResponse('{}');
        $this->expectException(ApiException::class);
        $this->api->validateCustomer();
    }

    // List tests

    public function testRowCount()
    {
        $this->adapter->queueResponseFromPaginatedFile('GetCountryList.json');
        $countries = $this->api->getCountryList();
        $this->assertSame(84, count($countries));
    }

    public function testPagination()
    {
        $this->adapter->queueResponseFromPaginatedFile('GetCountryList.json');
        $items = $this->api->getCountryList();
        $count = 0;
        foreach ($items as $item) $count++;
        $this->assertSame(84, $count);
    }

    public function testManualPagination()
    {
        $this->queueSitePage(range(1, 30), 35);
        $this->queueSitePage(range(31, 35), 35);
        $this->queueSitePage(range(1, 35), 35);
        $this->queueSitePage([], 35);

        $sites = $this->api->getSiteList();
        $this->assertSame([], $this->adapter->requestedRanges);
        $firstPage = $sites->page(1, 30);
        $page = $sites->page(2, 30);

        $this->assertSame(30, count($firstPage));
        $this->assertSame(1, $firstPage->getPage());
        $this->assertSame(5, count($page));
        $this->assertSame(2, $page->getPage());
        $this->assertSame(30, $page->getPageSize());
        $this->assertSame(35, $page->getTotalCount());
        $this->assertSame(2, $page->getPageCount());
        $this->assertSame([31, 32, 33, 34, 35], array_map(function ($item) { return $item->id; }, iterator_to_array($page)));
        $this->assertSame(35, count($sites));
        $this->assertSame(1, $sites->get(0)->id);
        $this->assertSame(0, count($sites->page(3, 30)));
        $this->assertSame([[1, 30], [31, 60], [1, 50], [61, 90]], $this->adapter->requestedRanges);
    }

    public function testManualPaginationRejectsInvalidPage()
    {
        $sites = $this->api->getSiteList();

        $this->expectException(\InvalidArgumentException::class);
        $sites->page(0, 30);
    }

    private function queueSitePage(array $ids, int $totalCount): void
    {
        $items = array_map(function ($id) { return ['ID' => $id]; }, $ids);
        $this->adapter->queueResponse(json_encode([
            'GetSiteListJsonResult' => [
                'Success' => true,
                'Value' => ['Items' => $items, 'RowsCount' => $totalCount],
            ],
        ]));
    }
}
