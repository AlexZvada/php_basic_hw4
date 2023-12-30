<?php

$value = 1;

if ($value === 1) {
    var_dump("green");
} elseif ($value === 2) {
    var_dump("red");
} elseif ($value === 3) {
    var_dump("blue");
} elseif ($value === 4) {
    var_dump("brown");
} elseif ($value === 5) {
    var_dump("violet");
} elseif ($value === 6) {
    var_dump("black");
} else
    var_dump("white");

switch ($value) {
    case 1:
        var_dump("green");
        break;
    case 2:
        var_dump("red");
        break;
    case 3:
        var_dump("blue");
        break;
    case 4:
        var_dump("brown");
        break;
    case 5:
        var_dump("violet");
        break;
    case 6:
        var_dump("black");
        break;
    default:
        var_dump("white");
        break;
}

$result = match ($value) {
    1 => "green",
    2 => "red",
    3 => "blue",
    4 => "brown",
    5 => "violet",
    6 => "black",
    default => "white",
};

var_dump($result);

