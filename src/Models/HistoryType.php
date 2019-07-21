<?php
namespace Omnicasa\Models;

final class HistoryType
{
    const Contact         = 0;
    const Visit           = 1;
    const PhoneIn         = 2;
    const PhoneOut        = 3;
    const EmailOut        = 4;
    const FaxOut          = 5;
    const LetterOut       = 6;
    const EmailIn         = 7;
    const FaxIn           = 8;
    const LetterIn        = 9;
    const HandledIn       = 10;
    const Website         = 11;
    const EnteredProperty = 12;
    const ChangedProperty = 13;
    const NewPerson       = 14;
    const ChangedPerson   = 15;
    const NewDemand       = 16;
    const ChangedDemand   = 17;
    const Sent            = 18;
    const Removed         = 19;
    const TextOut         = 20;
    const TextIn          = 21;
    const ProjectCreated  = 22;
    const ProjectModified = 23;
    const Checkup         = 24;
    const CompanyCreated  = 25;
    const CompanyModified = 26;

    private function __construct() {}
}
