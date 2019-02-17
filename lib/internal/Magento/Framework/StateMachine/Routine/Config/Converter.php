<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:58 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config;

use Magento\Framework\Config\ConverterInterface;

class Converter implements ConverterInterface
{
    /**
     * @var Converter\Xml
     */
    private $xmlConverter;
    /**
     * @var Converter\Structure
     */
    private $structureConverter;

    public function __construct(
        Converter\Xml $xmlConverter,
        Converter\Structure $structureConverter
    ) {
        $this->xmlConverter = $xmlConverter;
        $this->structureConverter = $structureConverter;
    }

    /**
     * Convert config
     *
     * @param \DOMDocument $source
     * @return array
     */
    public function convert($source)
    {
        return $this->structureConverter->convert($this->xmlConverter->convert($source));
    }
}
