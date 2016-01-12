<?php
/**
 * Zend Framework 3 module with a couple of useful filter
 *
 * @package    TravelloFilter
 * @author     Ralf Eggert <ralf@travello.de>
 * @link       https://github.com/RalfEggert/travello-filter
 * @license    http://opensource.org/licenses/MIT The MIT License (MIT)
 */
return [
    'filters' => [
        'invokables' => [
            'StringToUrlSlug' =>
                TravelloFilter\Filter\StringToUrlSlug::class,
        ],
        'factories'  => [
            'StringHtmlPurify' =>
                TravelloFilter\Filter\StringHtmlPurifyFactory::class,
        ],
    ],

    'html_purifier_config' => [
        'Cache.SerializerPath' => '/tmp',
    ],
];
