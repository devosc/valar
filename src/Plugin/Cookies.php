<?php
/**
 *
 */

namespace Valar\Plugin;

use Mvc5\Cookie\HttpCookies;
use Mvc5\Plugin\ScopedCall;
use Mvc5\Plugin\Shared;

use function Laminas\Diactoros\parseCookieHeader;

use const Mvc5\HEADERS;

final class Cookies
    extends Shared
{
    /**
     * @param string $name
     */
    function __construct(string $name = 'cookies')
    {
        parent::__construct($name, new ScopedCall($this));
    }

    /**
     * @return \Closure
     */
    function __invoke() : \Closure
    {
        return fn() => new HttpCookies(
                isset($this[HEADERS]['cookie']) ? parseCookieHeader($this[HEADERS]['cookie']) : $_COOKIE
        );
    }
}
