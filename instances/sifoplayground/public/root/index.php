<?php

use Sifo\Bootstrap;

define('ROOT_PATH', realpath(dirname(__FILE__, 5)));

$instance = basename(dirname(__FILE__, 3));

require ROOT_PATH . '/vendor/sifophp/sifo/src/Sifo/Bootstrap.php';

Bootstrap::execute($instance);
