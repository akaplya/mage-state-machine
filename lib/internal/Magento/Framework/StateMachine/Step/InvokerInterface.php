<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 11:33 AM
 */

namespace Magento\Framework\StateMachine\Step;

interface InvokerInterface
{
    /**
     * @param array $step
     * @param array|null $parameters
     * @return array|null
     */
    public function invoke(array $step, ?array $parameters) : ?array;
}