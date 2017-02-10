<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Filesystem\Filesystem;

$fs = new Filesystem();

$usageFileContent = <<<JSON
[
    {
        "metric": "words",
        "value": 123
    }
]
JSON;

$fs->mkdir('/data/out');
$fs->dumpFile('/data/out/usage.json', $usageFileContent);
