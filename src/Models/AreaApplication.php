<?php
namespace Omnicasa\Models;

final class AreaApplication
{
    const ResidentialArea                   = 1;
    const MixedResidentialArea              = 2;
    const EconomicActivityArea              = 3;
    const IndustrialArea                    = 4;
    const RecreationArea                    = 5;
    const GreenArea                         = 6;
    const ForestArea                        = 7;
    const AgriculturalArea                  = 8;
    const ReservedArea                      = 9;
    const ExcavationArea                    = 10;
    const ParkArea                          = 11;
    const NatureArea                        = 12;
    const Other                             = 13;
    const DaytimeLeisureArea                = 14;
    const TourismArea                       = 15;
    const IndustrialCommercialArea          = 16;
    const ValuableLandscapeAgriculturalArea = 17;
    const NatureReserve                     = 18;
    const CulturallyValuableResidentialArea = 19;
    const ResidentialPark                   = 20;
    const ResidentialExpansionArea          = 21;
    const RuralResidentialArea              = 22;
    const RecreationalResidentialArea       = 23;
    const Pending                           = 1000;
    const ToRequest                         = 1001;

    private function __construct() {}
}
