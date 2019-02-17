<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:56 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config;

/**
 * Interface ConfigInterface
 * @package Magento\Framework\StateMachine\Routine\Config
 */
interface ConfigInterface
{
    /**
     * @param string $RoutineName
     * @return array
     */
    public function getRoutine(string $RoutineName) : ?Data\BaseRoutine;
}