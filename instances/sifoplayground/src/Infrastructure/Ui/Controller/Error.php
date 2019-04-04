<?php

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;
use Sifo\FilterGet;

class Error extends Controller
{
    public function build()
    {
        $exception_code = (int) FilterGet::getInstance()->getString('code');

        $class_name = '\Sifo\Exception_'.$exception_code;

        throw new $class_name();
    }
}