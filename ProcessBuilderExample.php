<?php

use Symfony\Component\Process\ProcessBuilder;

require __DIR__ . '/vendor/autoload.php';

$processBuilder = new ProcessBuilder(['ls', '|', 'xargs' ,'-I', '{}', 'echo', '"- {}"']);

$processBuilder->getProcess()->run(function ($type, $out) {
    echo $out;
});
