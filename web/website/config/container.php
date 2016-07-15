<?php

use Interop\Container\ContainerInterface;
use SeerUK\Frost\FeatureDirector;

$features = require __DIR__ . "/features.php";

return [
    FeatureDirector::class => function(ContainerInterface $c) use ($features) {
        $director = new FeatureDirector();
        $director->addFeatures($features);

        return $director;
    }
];
