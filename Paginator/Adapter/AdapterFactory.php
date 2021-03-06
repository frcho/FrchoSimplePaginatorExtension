<?php

namespace Frcho\SimplePaginatorBundle\Paginator\Adapter;

use Frcho\SimplePaginatorBundle\Paginator\Exception\AdapterNotSupportedException

;

/**
 * AdapterFactory
 *
 * @package FrchoSimplePaginatorBundle
 * @subpackage Adapter
 * @author Francisco Javier Aceituno <javier.aceituno@ideup.com>
 */
class AdapterFactory {

    /**
     * This method recieve a data collection and returns the corresponding adapter.
     *
     * @param mixed $collection
     * @return AdapterInterface
     * @throws Frcho\SimplePaginatorBundle\Paginator\Exception\AdapterNotSupportedException
     */
    public function createAdapter($collection) {
        if (\is_array($collection)) {
            $className = 'Array';
        } else {
            try {
                $r = new \ReflectionClass($collection);
                $className = $r->getName();
            } catch (\ReflectionException $exc) {
                throw new AdapterNotSupportedException($collection);
            }
        }

        $adapterName = __NAMESPACE__ . "\\" . $className . 'Adapter'
        ;

        return new $adapterName($collection);
    }

}
