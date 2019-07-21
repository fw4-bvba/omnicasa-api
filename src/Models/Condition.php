<?php
namespace Omnicasa\Models;

final class Condition
{
    const Used       = 1;
    const New        = 2;
    const ToBuild    = 3;
    const ToRenovate = 4;
    const Renovated  = 5;
    const ToRestore  = 6;
    const Restored   = 7;
    const ToDemolish = 8;
    const ToRefresh  = 9;

    private function __construct() {}
}
