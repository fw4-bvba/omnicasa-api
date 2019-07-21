<?php
namespace Omnicasa\Models;

final class FreeAvailable
{
    const AtDeed                 = 1;
    const AfterWork              = 2;
    const InAgreement            = 3;
    const Compromise             = 4;
    const Immediately            = 5;
    const RespectingRentContract = 6;
    const AtDate                 = 7;

    private function __construct() {}
}
