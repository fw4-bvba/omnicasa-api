# Omnicasa API

PHP client for the [Onmicasa](https://www.omnicasa.com) API.

## Installation

`composer require fw4/omnicasa-api`

## Usage

```php
$client = new \Omnicasa\Omnicasa('name', 'password');
$properties = $client->getPropertyList([
    'CountryIDs' => [10]
]);
foreach ($properties as $property) var_dump($property->id);
```

It's also possible to construct requests through objects:

```php
$request = new \Omnicasa\Request\Property\GetPropertyListRequest();
$request->countryIDs = [10];
$request->zips = [1000, 3000];

$client = new \Omnicasa\Omnicasa('name', 'password');
$properties = $client->getPropertyList($request);
foreach ($properties as $property) var_dump($property->id);
```

Properties on both requests and responses are implemented case insensitively. For more information about available request parameters and response properties, refer to [the official API spec](http://newapi.omnicasa.com/1.12/).

## Pagination

When iterating over a response containing multiple objects, sequential pagination requests will automatically be sent in the background.

To fetch one page explicitly (page numbers start at 1):

```php
$page = $client->getSiteList()->page(page: 1, perPage: 30);

echo count($page);            // Number of sites on this page
echo $page->getPage();        // 1
echo $page->getPageSize();    // 30
echo $page->getTotalCount();  // Number of sites across all pages
echo $page->getPageCount();   // Total number of pages

foreach ($page as $site) echo $site->id;
```
