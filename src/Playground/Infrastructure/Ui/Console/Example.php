<?php

namespace Sifo\Playground\Infrastructure\Ui\Console;

use Common\SharedCommandLineController;

class Example extends SharedCommandLineController
{
    function init()
    {
        $this->help_str = 'This is an example script.';
        $this->setNewParam('p', 'param', 'This is an example parameter.', $need_value = true, $is_required = false);
    }

    function exec()
    {
        $this->showMessage("This is an example generic ouput!");
        $this->showMessage("This is a verbose generic output!", self::VERBOSE);
    }
}
