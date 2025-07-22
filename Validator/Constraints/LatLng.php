<?php

namespace Oh\GoogleMapFormTypeBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

#[\Attribute(\Attribute::TARGET_PROPERTY | \Attribute::TARGET_METHOD)]
class LatLng extends Constraint
{
    public string $message = 'The values for latitude and longitude ("%latitude%" and "%longitude%") are not valid.';
}
