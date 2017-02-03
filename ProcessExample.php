<?php

use Symfony\Component\Process\Process;

require __DIR__ . '/vendor/autoload.php';

$process = new Process('ls | xargs -I {} echo "- {}"');

$process->run(function ($type, $out) {
    echo $out;
});
