<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 3:40 PM
 */

namespace Magento\Example\Model;

use Magento\Example\Api\Step2Interface;

/**
 * Class Step2
 * @package Magento\Example\Model
 */
class Step2 implements Step2Interface
{

    /**
     * @param \Magento\Example\Api\Data\ArgumentInterface[] $values
     * @return \Magento\Example\Api\Data\ArgumentInterface[]
     */
    public function execute(array $values): array
    {
        return $values;
    }
}
