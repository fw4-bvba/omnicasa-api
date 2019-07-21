<?php
namespace Omnicasa\Models;

final class Heating
{
    const Individual    = 1;
    const Collective    = 2;
    const NotApplicable = 7;
    const Communal      = 8;

    private function __construct() {}
}
