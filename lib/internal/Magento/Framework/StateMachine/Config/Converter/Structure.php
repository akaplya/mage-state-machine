<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 9:27 PM
 */

namespace Magento\Framework\StateMachine\Config\Converter;

use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\StateMachine\Config\Data\State;

/**
 * Class Structure
 * @package Magento\Framework\StateMachine\Config\Converter
 */
class Structure
{
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    private static $stateMapping = [
        'Task' => \Magento\Framework\StateMachine\Config\Data\Task::class,
        'Success' => \Magento\Framework\StateMachine\Config\Data\Success::class,
        'Pass' => \Magento\Framework\StateMachine\Config\Data\Pass::class
    ];

    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $type
     * @param array $arguments
     * @return State
     */
    private function createStep(string $type, array $arguments) : State
    {
        return $this->objectManager->create(self::$stateMapping[$type], $arguments);
    }

    /**
     * @param array $scenario
     * @return State[]
     */
    private function getSteps(array $scenario) : array
    {
        $output = [];
        foreach($scenario['step'] as $step) {
            $output[$step['name']] = $this->createStep($step['type'], $step);
        }
        return $output;
    }

    /**
     * @param array $source
     * @return array
     */
    public function convert(array $source) : array
    {
        $output = [];
        foreach($source['stateMachine'][0]['scenario'] as $scenario) {
            $output[$scenario['name']] =
                $this->objectManager->create(
                    \Magento\Framework\StateMachine\Config\Data\Scenario::class,
                    [
                        'name' => $scenario['name'],
                        'steps' => $this->getSteps($scenario)
                    ]
                );
        }
        return $output;
    }
}
