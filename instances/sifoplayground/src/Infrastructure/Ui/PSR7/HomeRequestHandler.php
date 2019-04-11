<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\PSR7;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Sifo\Config;
use Sifo\Playground\Infrastructure\Ui\Module\CurrentTime;
use Sifo\View;
use Zend\Diactoros\Response\HtmlResponse;

class HomeRequestHandler implements RequestHandlerInterface
{
    /** @var string */
    private $template_path;
    /** @var View */
    private $view;

    public function __construct()
    {
        $this->template_path =  ROOT_PATH . '/' . Config::getInstance('sifoplayground')->getConfig(
            'templates',
            'base.html.twig'
        );
        $this->view = new View();
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $this->view->assign('page_title', 'HOME');
        $this->view->assign('controller', static::class);

//        $this->addModule('time', CurrentTime::class);

        return new HtmlResponse($this->view->fetch($this->template_path));
    }
}
