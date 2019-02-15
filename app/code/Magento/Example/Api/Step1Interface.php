<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/12/19
 * Time: 1:52 AM
 */

namespace Magento\Example\Api;


interface Step1Interface
{
    /**
     * @param \Magento\Example\Api\Data\ArgumentInterface[] $values
     * @return \Magento\Example\Api\Data\ArgumentInterface[]
     */
    public function execute(array $values = []) : array;
}
