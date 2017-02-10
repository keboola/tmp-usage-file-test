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
]\n
JSON;

$csvFileContent = <<<CSV
id,value
1,10
2,20\n
CSV;

$fs->mkdir('/data/out/tables');

$fs->dumpFile('/data/out/usage.json', $usageFileContent);
$fs->dumpFile('/data/out/tables/test.csv', $csvFileContent);
