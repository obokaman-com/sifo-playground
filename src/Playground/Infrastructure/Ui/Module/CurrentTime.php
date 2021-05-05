<?php

namespace Sifo\Playground\Infrastructure\Ui\Module;

use Sifo\Controller;

class CurrentTime extends Controller
{
    public function build(): void
    {
        $this->setLayout('time.html.twig');
    }
}
