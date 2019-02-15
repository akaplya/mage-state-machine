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
    private $resource;

    /**
     * Task constructor.
     * @param string $name
     * @param string $next
     * @param string $inputPath
     * @param string $outputPath
     * @param string $resource
     */
    public function __construct(
        string $name,
        string $next,
        string $inputPath,
        string $outputPath,
        string $resource
    ) {
        parent::__construct($name, $next, $inputPath, $outputPath);
        $this->resource = $resource;
    }
}
