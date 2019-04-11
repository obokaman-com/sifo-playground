<?php

/**
 * Routes known by the application.
 *
 * The key of the array is the part of the URL that matches, and the value the controller used.
 *
 * Example:
 *
 * Given the address http://list.seoframework.local/blah
 * $config['list'] = 'list/index';
 * This tells that the subdomain list uses the ListIndexController
 *
 * $config['blah'] = 'blah/something'
 * This tells that the BlahSomethingController is used instead.
 *
 * If a subdomain matches a routing is used instead of any other part of the URL. With the given
 * example if the two routes were given, only the list/index would apply.
 *
 * The following values cannot be erased and are necessary for the proper working of the  framework,
 * although you can change their values:
 *
 * __NO_ROUTE_FOUND__
 * __HOME__
 * rebuild
 */
// ____________________________________________________________________________

// When the router doesn't know what to do with the URL, who is going to handle it?:
use Common\StaticIndexController;
use Sifo\Playground\Infrastructure\Ui\Controller\{Error, Example, Home, Json, Redirect};
use Sifo\Playground\Infrastructure\Ui\PSR7\ErrorResponseHandler;
use Sifo\Playground\Infrastructure\Ui\PSR7\HomeRequestHandler;
use Sifo\Playground\Infrastructure\Ui\PSR7\JsonRequestHandler;

// Rebuild/regenerate the configuration files:
$config['rebuild'] = 'manager/rebuild';

// Sifo debug
$config['sifo-debug-analyzer'] = 'debug/analyzer';
$config['sifo-debug-actions'] = 'debug/actions';

// APP ROUTES
$config['__NO_ROUTE_FOUND__'] = StaticIndexController::class;
$config['__HOME__'] = Home::class;
$config['psr7'] = HomeRequestHandler::class;
$config['example'] = Example::class;
$config['redirect'] = Redirect::class;
$config['psr7-redirect'] = Redirect::class;
$config['exception'] = Error::class;
$config['json'] = Json::class;
$config['psr7-json'] = JsonRequestHandler::class;
$config['psr7-exception'] = ErrorResponseHandler::class;

