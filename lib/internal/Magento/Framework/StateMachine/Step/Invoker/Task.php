<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 12:17 PM
 */

namespace Magento\Framework\StateMachine\Step\Invoker;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\StateMachine\Step\InvokerInterface;

class Task implements InvokerInterface
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * @var array
     */
    private $tasks;

    /**
     * Task constructor.
     * @param ObjectManagerInterface $objectManager
     * @param array $tasks
     */
    public function __construct(
        ObjectManagerInterface $objectManager,
        array $tasks = []
    ) {
        $this->objectManager = $objectManager;
        $this->tasks = $tasks;
    }

    /**
     * @param array $step
     * @param array|null $parameters
     * @return array|null
     */
    public function invoke(array $step, ?array $parameters): ?array
    {
        if (!isset($this->tasks[$step['task']['type']])) {
            throw new \InvalidArgumentException('Unknown task type');
        }
        /** @var InvokerInterface $task */
        $task = $this->objectManager->get($this->tasks[$step['task']['type']]);
        return $task->invoke($step, $parameters);
    }
}
