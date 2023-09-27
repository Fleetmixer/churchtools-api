<?php

if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}
chdir(dirname(__DIR__));

$janePath = __DIR__."/../../../vendor/bin/jane-openapi";
$cmdLine= $janePath." generate --config-file=".__DIR__."/config.php";
echo "Exec: ".$cmdLine."<br>\n";
set_time_limit(120); // Retrieval & generation takes more than the default 30 seconds
exec($cmdLine);
return false;