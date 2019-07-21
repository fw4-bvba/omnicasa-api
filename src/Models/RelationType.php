<?php
namespace Omnicasa\Models;

final class RelationType
{
    const Parent         = 1;
    const Sibling        = 2;
    const Spouse         = 3;
    const LivingTogether = 4;
    const Other          = 5;
    const Family         = 6;

    private function __construct() {}
}
