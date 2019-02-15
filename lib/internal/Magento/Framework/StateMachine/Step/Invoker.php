<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 11:32 AM
 */

namespace Magento\Framework\StateMachine\Step;

use \Magento\Framework\ObjectManagerInterface;

class Invoker implements InvokerInterface
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;
    /**
     * @var array
     */
    private $invokers;

    public function __construct(
        ObjectManagerInterface $objectManager,
        $invokers = []
    ) {
        $this->objectManager = $objectManager;
        $this->invokers = $invokers;
    }

    /**
     * @param array $step
     * @param array|null $parameters
     * @return array|null
     */
    public function invoke(array $step, ?array $parameters): ?array
    {
        if (!isset($this->invokers[$step['type']])) {
            throw new \InvalidArgumentException('Unknown step type');
        }
        /** @var \Magento\Framework\StateMachine\Step\InvokerInterface $invoker */
        $invoker = $this->objectManager->get($this->invokers[$step['type']]);
        $result = $invoker->invoke($step, $parameters);
        return $result;
    }
}
