<?php
/**
 * Zend Framework 3 module with a couple of useful filter
 *
 * @package    TravelloFilter
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-filter
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */

use TravelloFilter\Filter\StringHtmlPurify;
use TravelloFilter\Filter\StringHtmlPurifyFactory;
use TravelloFilter\Filter\StringToUrlSlug;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'filters' => [
        'aliases'   => [
            'StringToUrlSlug'  => StringToUrlSlug::class,
            'StringHtmlPurify' => StringHtmlPurify::class,
        ],
        'factories' => [
            StringToUrlSlug::class  => InvokableFactory::class,
            StringHtmlPurify::class => StringHtmlPurifyFactory::class,
        ],
    ],

    'html_purifier_config' => [
        'Cache.SerializerPath' => '/tmp',
    ],
];
