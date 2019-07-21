<?php
namespace Omnicasa\Models;

final class PersonType
{
    const Owner           = 1;
    const CurrentTenant   = 2;
    const Syndic          = 3;
    const NotarySeller    = 4;
    const NotaryBuyer     = 5;
    const Manager         = 6;
    const Family          = 7;
    const CoAgent         = 8;
    const Other           = 9;
    const Buyer           = 10;
    const DepartingTenant = 11;
    const NewTenant       = 12;

    private function __construct() {}
}
