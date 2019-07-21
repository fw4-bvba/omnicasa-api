<?php
namespace Omnicasa\Models;

final class HeatingB
{
    const None                   = 1;
    const Electrical             = 2;
    const CentralGas             = 3;
    const CentralFuel            = 4;
    const CentralAir             = 5;
    const AirConditioning        = 6;
    const CoalStove              = 7;
    const FuelStove              = 8;
    const GasStove               = 9;
    const FloorHeating           = 10;
    const PipesInstalled         = 11;
    const SolarPanels            = 12;
    const ElectricalAccumulators = 13;
    const FanCoilUnit            = 14;
    const HeatPump               = 15;
    const Pellets                = 17;
    const Wood                   = 18;

    private function __construct() {}
}
