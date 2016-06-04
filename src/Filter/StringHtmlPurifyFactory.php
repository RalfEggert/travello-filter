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
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class StringHtmlPurifyFactory
 *
 * @package TravelloFilter\Filter
 */
class StringHtmlPurifyFactory implements FactoryInterface
{
    public function __invoke(
        ContainerInterface $container,
        $requestedName,
        array $options = null
    ) {
        $config = $container->get('Config');

        $htmlPurifierConfig = HTMLPurifier_Config::createDefault();

        foreach ($config['html_purifier_config'] as $key => $value) {
            $htmlPurifierConfig->set($key, $value);
        }

        $purifier = new HTMLPurifier($htmlPurifierConfig);

        $filter = new StringHtmlPurify($purifier);

        return $filter;
    }
}
