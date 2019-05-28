<?php

define("DB_HOST", "localhost");
define("DB_ROOT", "root");
define("DB_PASSWORD", "");
define("DB_NAME", "trainning");

$conn = mysqli_connect(DB_HOST , DB_ROOT, DB_PASSWORD, DB_NAME);


if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
} else {
    //echo "connected";
}

