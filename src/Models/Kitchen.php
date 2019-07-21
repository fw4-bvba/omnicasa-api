<?php
namespace Omnicasa\Models;

final class Kitchen
{
    const None                   = 1;
    const Cupboards              = 2;
    const CupboardsAndAppliances = 3;
    const AllBuiltIn             = 4;
    const AllComfort             = 5;
    const ConnectionsPresent     = 6;
    const Equipped               = 7;
    const SemiEquipped           = 8;
    const NotEquipped            = 9;
    const HyperEquipped          = 10;
    const SemiEquippedAmerican   = 11;
    const EquippedAmerican       = 12;
    const HyperEquippedAmerican  = 13;
    const EquippedAmericanAlt    = 14;
    const NotEquippedAmerican    = 15;

    private function __construct() {}
}
