<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 2:19 PM
 */

namespace Magento\Framework\StateMachine\Config\Data;

/**
 * Class Task
 * @package Magento\Framework\StateMachine\Config\Data
 */
class Task extends State implements InvokableStateInterface
{
    /**
     * @var string
     */
    private $routine;

    /**
     * @var string
     */
    private $next;

    /**
     * Task constructor.
     * @param string $name
     * @param string $next
     * @param string $routine
     * @param string|null $inputPath
     * @param string|null $outputPath
     */
    public function __construct(
        string $name,
        string $next,
        string $routine,
        string $inputPath = null,
        string $outputPath = null
    ) {
        parent::__construct($name, $inputPath, $outputPath);
        $this->next = $next;
        $this->routine = $routine;
    }

    /**
     * @return string
     */
    public function getNext() : string
    {
        return $this->next;
    }

    /**
     * @return string
     */
    public function getRoutine() : string
    {
        return $this->routine;
    }
}
