<?php
/**
 *
 */

namespace Valar\Plugin;

use Laminas\Diactoros\PhpInputStream;
use Mvc5\Plugin\ScopedCall;
use Mvc5\Plugin\Shared;

class Body
    extends Shared
{
    /**
     * @param string $name
     */
    function __construct(string $name = 'body')
    {
        parent::__construct($name, new ScopedCall($this));
    }

    /**
     * @return \Closure
     */
    function __invoke() : \Closure
    {
        return function() {
            return new PhpInputStream;
        };
    }
}
