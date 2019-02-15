<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:56 PM
 */

namespace Magento\Framework\StateMachine\CallResource\Config;

/**
 * Interface ConfigInterface
 * @package Magento\Framework\StateMachine\CallResource\Config
 */
interface ConfigInterface
{
    /**
     * @param string $CallResourceName
     * @return array
     */
    public function getCallResource(string $CallResourceName) : array;
}