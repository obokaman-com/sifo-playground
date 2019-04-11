<?php

declare(strict_types=1);

namespace Sifo\Playground\Infrastructure\Ui\PSR7;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class ErrorResponseHandler implements RequestHandlerInterface
{
    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $exception_code = $request->getQueryParams()['code'];

        $class_name = '\Sifo\Exception_'.$exception_code;

        throw new $class_name();
    }
}
