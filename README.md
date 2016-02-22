# coordinates-distance-bundle

## Installation

```
composer require jean553/coordinates-distance-bundle
```

app/AppKernel.php :
```php
$bundles = array(
    new jean553\CoordinatesDistanceBundle\CoordinatesDistanceBundle(),
    ...
)
```

## Use

```
$service = $this->get('coordinates-distance.service');
$distanceInKilometers = $service->getDistanceBetweenCoordinates(
    $latitudeFrom,
    $longitudeFrom,
    $latitudeTo,
    $longitudeTo
);
```
