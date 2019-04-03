<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;

final class Example extends Controller
{
    function build()
    {
        $this->setLayout('empty.html.twig');
        $this->assign('page_title', 'EXAMPLE ROUTE');
        $this->assign('controller', static::class);
    }
}