<?php
/**
 * Zend Framework 3 module with a couple of useful filter
 *
 * @package    TravelloFilter
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-view-helper
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

namespace TravelloFilter;

use TravelloFilter\Filter\StringHtmlPurify;
use TravelloFilter\Filter\StringHtmlPurifyFactory;
use TravelloFilter\Filter\StringToUrlSlug;
use Zend\ServiceManager\Factory\InvokableFactory;

/**
 * Class ConfigProvider
 *
 * @package TravelloFilter
 */
class ConfigProvider
{
    /**
     * Returns configuration from file
     *
     * @return array
     */
    public function __invoke()
    {
        return [
            'filters'              => $this->getFilterConfig(),
            'html_purifier_config' => $this->getHtmlPurifierConfig(),
        ];
    }

    /**
     * Get filter configuration
     *
     * @return array
     */
    public function getFilterConfig()
    {
        return [
            'aliases'   => [
                'StringToUrlSlug'  => StringToUrlSlug::class,
                'StringHtmlPurify' => StringHtmlPurify::class,
            ],
            'factories' => [
                StringToUrlSlug::class  => InvokableFactory::class,
                StringHtmlPurify::class => StringHtmlPurifyFactory::class,
            ],
        ];
    }

    /**
     * Get html purifier configuration
     *
     * @return array
     */
    public function getHtmlPurifierConfig()
    {
        return [
            'Cache.SerializerPath' => '/tmp',
        ];
    }
}
