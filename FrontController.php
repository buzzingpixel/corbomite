<?php
declare(strict_types=1);

// phpcs:ignoreFile

use corbomite\di\Di;
use corbomite\cli\Kernel as CliKernel;
use corbomite\http\Kernel as HttpKernel;

define('APP_BASE_PATH', __DIR__);
define('APP_VENDOR_PATH', APP_BASE_PATH . '/vendor');

require APP_VENDOR_PATH . '/autoload.php';

if (file_exists(APP_BASE_PATH . '/.env')) {
    (new Dotenv\Dotenv(APP_BASE_PATH))->load();
}

if (PHP_SAPI === 'cli') {
    /** @noinspection PhpUnhandledExceptionInspection */
    Di::get(CliKernel::class)($argv);
    exit();
}

/** @noinspection PhpUnhandledExceptionInspection */
Di::get(HttpKernel::class)($argv);
exit();
