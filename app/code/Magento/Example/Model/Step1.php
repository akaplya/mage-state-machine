<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 3:39 PM
 */

namespace Magento\Example\Model;

use Magento\Example\Api\Step1Interface;

/**
 * Class Step1
 * @package Magento\Example\Model
 */
class Step1 implements Step1Interface
{

    /**
     * @param \Magento\Example\Api\Data\ArgumentInterface[] $values
     * @return \Magento\Example\Api\Data\ArgumentInterface[]
     */
    public function execute(array $values = []): array
    {
        $result = [];
        if (!empty($values)) {
            foreach ($values as $value) {
                $result[] = $values + 5;
            }
        } else {
            $result = [1, 2, 3];
        }
        return $result;
    }
}
