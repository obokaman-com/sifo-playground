<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;

final class NotFound extends Controller
{
    function build()
    {
        $this->setLayout('empty.html.twig');
        $this->assign('page_title', 'NOT FOUND');
        $this->assign('controller', static::class);
    }
}