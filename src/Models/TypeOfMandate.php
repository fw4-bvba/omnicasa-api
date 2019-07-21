<?php
namespace Omnicasa\Models;

final class TypeOfMandate
{
    const None         = 0;
    const CoExclusive  = 1;
    const Exclusive    = 2;
    const NonExclusive = 3;

    private function __construct() {}
}
