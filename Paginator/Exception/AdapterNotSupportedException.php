<?php

namespace Frcho\SimplePaginatorBundle\Paginator\Exception;

/**
 * AdapterNotSupportedException
 *
 * @package FrchoSimplePaginatorBundle
 * @subpackage Exception
 * @author Francisco Javier Aceituno <javier.aceituno@ideup.com>
 */
class AdapterNotSupportedException extends \Exception
{
    public function __construct($value)
    {
        parent::__construct(sprintf('The adapter for the class "%s" does not exist.', is_object($value) ? get_class($value) : gettype($value)));
    }
}
