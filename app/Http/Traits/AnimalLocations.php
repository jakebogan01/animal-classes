<?php

namespace App\Http\Traits;

trait AnimalLocations
{
    public function generateLocation(): string
    {
        $locations = ['North America', 'South America', 'Africa', 'Australia'];
        $i = array_rand($locations);

        return $locations[$i];
    }
}
