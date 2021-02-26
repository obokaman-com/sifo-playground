<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\Controller;

use Sifo\Controller;
use Sifo\Playground\Infrastructure\Ui\Module\CurrentTime;

final class Example extends Controller
{
    public function build(): void
    {
        $this->setLayout('base.html.twig');
        $this->assign('page_title', 'EXAMPLE ROUTE');
        $this->assign('controller', __CLASS__);

        $this->addModule('time', CurrentTime::class);
    }

    public function getCacheDefinition()
    {
        if ('nocache' === $this->getUrlParam(0)) {
            return false;
        }

        return __CLASS__;
    }
}
