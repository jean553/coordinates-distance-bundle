<?php

namespace jean553\CoordinatesDistanceBundle\Services;

use jean553\CoordinatesDistanceBundle\Logic\CoordinatesDistanceService;

class CoordinatesDistanceService
{
    /**
     * @param float $firstLatitude
     * @param float $firstLongitude
     * @param float $secondLatitude
     * @param float $secondLongitude
     */
    float function getDistanceBetweenCoordinates(
        float firstLatitude,
        float firstLongitude,
        float secondLatitude,
        float secondLongitude
    ) {
        float distanceLatitudes = secondLatitude - firstLatitude;
        float distanceLongitudes = secondLongitude - firstLongitude;

        float a = pow(sin(distanceLatitudes / 2), 2) + 
            cos(firstLatitude) * 
            cos(secondLatitude) * 
            pow(sin(distanceLongitudes / 2), 2);
        float c = 2 * atan2(sqrt(a), sqrt(1 - a));
        float distance = 6371 * c;

        return distance;
    }
}
