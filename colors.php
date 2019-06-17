<?php

require 'vendor/autoload.php';

use League\ColorExtractor\Color;
use League\ColorExtractor\ColorExtractor;
use League\ColorExtractor\Palette;

$palette = Palette::fromFilename('./images/para2.jpg');


// it offers some helpers too
$allColors = $palette->getMostUsedColors(1024);

// $palette is an iterator on colors sorted by pixel count
foreach($allColors as $color => $count) {
    // colors are represented by integers
    $current = Color::fromIntToHex($color);
    echo "<li style='background-color: ".$current."'>" .$current. "</li>";

}
