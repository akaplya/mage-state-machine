<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 4:22 PM
 */

namespace Magento\Framework\StateMachine\Config;

/**
 * Interface ConfigInterface
 * @package Magento\Framework\StateMachine\Config
 */
interface ConfigInterface
{
    public function getScenario(string $scenarioName) : array;
    public function getScenarioSteps(string $scenarioName) : array;
}
