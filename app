#!/usr/bin/env php
<?php

declare(strict_types=1);

if (php_sapi_name() != 'cli') {
    echo "<h1>Only in CLI mode</h1>";
    exit;
}

require_once __DIR__  . '/vendor/autoload.php';

use Src\Commands\{BannerCommand, CalculatorCommand};
use Src\Utils\Printer;

BannerCommand::init();

$n1 = (float) readline("> Number One: ");
$n2 = (float) readline("> Number Two: ");

$app = new CalculatorCommand($n1, $n2);

Printer::info("Add: {$app->add()}");
Printer::info("Minus: {$app->less()}");
Printer::info("Multi: {$app->multi()}");
Printer::info("Divide: {$app->divide()}");

