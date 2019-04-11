<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\PSR7;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use function sprintf;
use Zend\Diactoros\Response\JsonResponse;

class JsonRequestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        return new JsonResponse([
            'message' => 'This is a JSON answer',
            'back_link' => $this->getUrl($request),
        ]);
    }

    private function getUrl(ServerRequestInterface $request): string
    {
        return sprintf(
            '%s://%s:%s%s',
            $request->getUri()->getScheme(),
            $request->getUri()->getHost(),
            $request->getUri()->getPort(),
            $request->getUri()->getPath()
        );
    }
}
