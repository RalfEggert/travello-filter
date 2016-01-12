<?php
/**
 * Zend Framework 3 module with a couple of useful filter
 *
 * @package    TravelloFilter
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-filter
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloFilter\Filter;

use HTMLPurifier;
use HTMLPurifier_Config;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class StringHtmlPurifyFactory
 *
 * @package TravelloFilter\Filter
 */
class StringHtmlPurifyFactory implements FactoryInterface
{
    /**
     * @param ServiceLocatorInterface $serviceLocator
     *
     * @return StringHtmlPurify
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config   = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        $filter = new StringHtmlPurify($purifier);

        return $filter;
    }
}
