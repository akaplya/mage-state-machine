<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 2:09 PM
 */

namespace Magento\Framework\StateMachine\Config\Data;

/**
 * Class Scenario
 * @package Magento\Framework\StateMachine\Config\Data
 */
class Scenario
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $steps;

    /**
     * Scenario constructor.
     * @param string $name
     * @param array $steps
     */
    public function __construct(
        string $name,
        array $steps
    ) {
        $this->name = $name;
        $this->steps = $steps;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getSteps() : array
    {
        return $this->steps;
    }
}
