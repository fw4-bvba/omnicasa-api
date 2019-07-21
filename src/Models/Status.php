<?php
namespace Omnicasa\Models;

final class Status
{
    const Prospective = 0;
    const Active      = 1;
    const Sold        = 2;
    const Cancelled   = 3;
    const Rented      = 4;
    const Inactive    = 5;
    const Reference   = 6;

    private function __construct() {}
}
