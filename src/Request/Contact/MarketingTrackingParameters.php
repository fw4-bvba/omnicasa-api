<?php
namespace Omnicasa\Request\Contact;

use Omnicasa\Request\RequestObject;

class MarketingTrackingParameters extends RequestObject
{
    const PROPERTIES = [
        'UTMSource'      => 'string',
        'UTMMedium'      => 'string',
        'UTMCampaign'    => 'string',
        'UTMTerm'        => 'string',
        'UTMContent'     => 'string',
        'GCLID'          => 'string',
        'FBCLID'         => 'string',
        'FBC'            => 'string',
        'FBP'            => 'string',
        'MSCLKID'        => 'string',
        'LandingPageURL' => 'string',
        'ReferrerURL'    => 'string',
    ];
}
