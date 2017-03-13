<?php
/**
 *
 */

use Mvc5\Plugin\Args;
use Mvc5\Plugin\Plugin;

return [
    'request' => new Valar\Request\Plugin(include __DIR__ . '/request.php'),
    'response' => [Valar\Response\Config::class, 'config' => new Args(['cookies' => new Plugin('cookie\container')])],
    'response\json' => Valar\Response\Json::class,
    'response\redirect' => Valar\Response\Redirect::class,
];
