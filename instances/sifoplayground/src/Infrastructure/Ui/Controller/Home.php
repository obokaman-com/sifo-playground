<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;

final class Home extends Controller
{
    function build()
    {
        $this->setLayout('empty.html.twig');
        $this->assign('page_title', 'HOME');
        $this->assign('controller', static::class);
    }
}