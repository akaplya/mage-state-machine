<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/16/19
 * Time: 4:05 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config\Data;

/**
 * Class BaseRoutine
 * @package Magento\Framework\StateMachine\Routine\Config\Data
 */
class BaseRoutine
{
    /**
     * @var string
     */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }
}