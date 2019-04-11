<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\PSR7;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Sifo\Exception_301;
use Sifo\Exception_302;
use function sprintf;

class RedirectRequestHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $redirect_code = $request->getQueryParams()['code'];

        if (301 === $redirect_code) {
            throw new Exception_301($this->getUrl($request));
        }

        throw new Exception_302($this->getUrl($request));
    }


    private function getUrl(ServerRequestInterface $request): string
    {
        return sprintf(
            '%s://%s',
            $request->getUri()->getScheme(),
            $request->getUri()->getHost()
        );
    }
}
