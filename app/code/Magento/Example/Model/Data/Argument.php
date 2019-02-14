<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 3:38 PM
 */

namespace Magento\Example\Model\Data;

use Magento\Example\Api\Data\ArgumentInterface;

/**
 * Class Argument
 * @package Magento\Example\Model\Data
 */
class Argument implements ArgumentInterface
{
    /**
     * @var
     */
    private $value;

    /**
     * @param int $value
     */
    public function setValue(int $value): void
    {
        $this->value = $value;
    }

    /**
     * @return array
     */
    public function getValue(): array
    {
        return $this->value;
    }
}