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
