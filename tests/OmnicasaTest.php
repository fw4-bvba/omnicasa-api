<?php

namespace Omnicasa\Tests;

use Omnicasa\Omnicasa;
use Omnicasa\Exception\ApiException;
use PHPUnit\Framework\TestCase;

class OmnicasaTest extends TestCase
{
    protected $api;

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
}
