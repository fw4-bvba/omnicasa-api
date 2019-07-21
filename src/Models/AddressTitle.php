<?php
namespace Omnicasa\Models;

final class AddressTitle
{
    const DeHeer           = 1;
    const Mevrouw          = 2;
    const DeHeerEnMevrouw  = 3;
    const Monsieur         = 4;
    const Madame           = 5;
    const MonsieurEtMadame = 6;
    const Mr               = 7;
    const Mrs              = 8;
    const MrAndMrs         = 9;

    private function __construct() {}
}
