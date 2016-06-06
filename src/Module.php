<?php
/**
 * Zend Framework 3 module with a couple of useful filter
 *
 * @package    TravelloFilter
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-filter
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloFilter;

/**
 * TravelloFilter module class
 *
 * @package    TravelloFilter
 */
class Module
{
    /**
     * Returns configuration to merge with application configuration
     *
     * @return array|\Traversable
     */
    public function getConfig()
    {
        $provider = new ConfigProvider();

        return $provider();
    }
}
