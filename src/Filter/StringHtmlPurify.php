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
use Zend\Filter\AbstractFilter;
use Zend\Filter\Exception;

/**
 * Class StringHtmlPurify
 *
 * @package TravelloFilter\Filter
 */
class StringHtmlPurify extends AbstractFilter
{
    /**
     * @var HTMLPurifier
     */
    private $htmlPurifier;

    /**
     * HtmlPurifier constructor.
     *
     * @param HtmlPurifier $htmlPurifier
     */
    public function __construct(HtmlPurifier $htmlPurifier)
    {
        $this->htmlPurifier = $htmlPurifier;
    }

    /**
     * Purify string with HtmlPurifier
     *
     * @param mixed $value
     *
     * @return string
     */
    public function filter($value)
    {
        return $this->htmlPurifier->purify($value);
    }
}
