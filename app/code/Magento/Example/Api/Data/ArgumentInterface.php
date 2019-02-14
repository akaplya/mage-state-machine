<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/12/19
 * Time: 1:50 AM
 */

namespace Magento\Example\Api\Data;


interface ArgumentInterface
{
    /**
     * @param int $value
     */
    public function setValue(int $value) : void;

    /**
     * @return array
     */
    public function getValue() : array;
}
