<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 11:35 AM
 */

namespace Magento\Framework\StateMachine\Step\Invoker;

use Magento\Framework\StateMachine\Step\InvokerInterface;

class Pass implements InvokerInterface
{
    /**
     * @param array $step
     * @param array|null $parameters
     * @return array|null
     */
    public function invoke(array $step, ?array $parameters): ?array
    {
        echo "<pre>";
        print_r($step);
        print_r($parameters);
        echo "</pre>";
        return $parameters;
    }
}