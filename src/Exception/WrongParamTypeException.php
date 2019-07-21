<?php
namespace Omnicasa\Exception;

class WrongParamTypeException extends RequestException
{
    public function __construct($classname, $property, $type, $value)
    {
        $valueType = (is_object($value) ? get_class($value) : gettype($value));
        $message = sprintf('%s::%s expects %s, got %s instead', $classname, $property, $type, $valueType);
        parent::__construct($message);
    }
}
