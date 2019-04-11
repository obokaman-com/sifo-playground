<?php

declare(strict_types=1);

use Sifo\Bootstrap;

call_user_func(static function() {
    define('ROOT_PATH', realpath(dirname(__FILE__, 5)));

    $instance = basename(dirname(__FILE__, 3));

    require ROOT_PATH . '/vendor/sifophp/sifo/src/Sifo/Bootstrap.php';

    Bootstrap::execute($instance);
});

