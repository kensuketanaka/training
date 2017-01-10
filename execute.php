<?php

$arg = $argv[1];

$param = FALSE;

switch ($arg) {
    case 'fizzbuzz':
    case 'FizzBuzz':
    case 'FizzBuzz/':
        $dir = 'fizzbuzz';
        $file_basename = 'fizzbuzz';
        $cls = 'FizzBuzz';
        break;
    default:
        break;
}

if($dir && $cls) {
    require_once "$dir/$file_basename.php";
    $fb_inst = new $cls();
    $fb_inst->print_number();
}
else {
    echo 'Please input class name.';
}
