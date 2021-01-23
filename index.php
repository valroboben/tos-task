<?php

require __DIR__ . '\vendor\autoload.php';

use Ramsey\Uuid\Uuid;

$uuid = Uuid::uuid1();

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);