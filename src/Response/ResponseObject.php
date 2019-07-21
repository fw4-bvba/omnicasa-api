<?php
namespace Omnicasa\Response;

use Omnicasa\Exception\ResponseException;

class ResponseObject implements \JsonSerializable
{
    protected $_data = [];
    private $_propertyIndex = [];

    public function __construct($data)
    {
        foreach ($data as $property => &$value) {
            $this->_propertyIndex[strtolower($property)] = $property;
            $this->$property = $this->parseValue($value, $property);
        }
    }

    protected function parseValue($value, ?string $property = null)
    {
        if (is_object($value)) {
            return new self($value);
        } else if (is_array($value)) {
            $result = [];
            foreach ($value as &$subvalue) $result[] = $this->parseValue($subvalue);
            return $result;
        } else if (isset($property) && is_string($value) && (strpos($property, 'Date') === strlen($property) - 4 || strpos($property, 'Date') === 0)) {
            if ($date = \DateTime::createFromFormat('Y-m-d H:i:s', $value)) return $date;
            else return null;
        } else if (is_string($value) && substr($value, 0, 6) === '/Date(' && preg_match('/^\/Date\((\d{10})(?:\d{3})([\+\-]\d{4})?\)\/$/', $value, $match)) {
            $date = new \DateTime('@' . $match[1]);
            if (!empty($match[2])) $date->setTimezone(new \DateTimeZone($match[2]));
            return $date;
        } else {
            return $value;
        }
    }

    public function getData(): array
    {
        return $this->_data;
    }

    public function __get(string $property)
    {
        $property = $this->normalizePropertyName($property);
        return $this->_data[$property] ?? null;
    }

    public function __set(string $property, $value)
    {
        $this->_propertyIndex[strtolower($property)] = $property;
        $this->_data[$property] = $value;
    }

    public function __isset(string $property): bool
    {
        $index = strtolower($property);
        return isset($this->_propertyIndex[$index]);
    }

    public function __unset(string $property)
    {
        $property = $this->normalizePropertyName($property);
        unset($this->_data[$property]);
    }

    public function __debugInfo() {
        return $this->getData();
    }

    protected function normalizePropertyName(string $property): string
    {
        $index = strtolower($property);
        if (empty($this->_propertyIndex[$index])) throw new ResponseException($property . ' is not a valid property of ' . static::class);
        return $this->_propertyIndex[$index];
    }

    /* JsonSerializable implementation */

    public function jsonSerialize()
    {
        return $this->getData();
    }
}
