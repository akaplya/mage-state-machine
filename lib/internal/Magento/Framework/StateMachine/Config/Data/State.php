<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 2:11 PM
 */

namespace Magento\Framework\StateMachine\Config\Data;

/**
 * Class State
 * @package Magento\Framework\StateMachine\Config\Data
 */
class State
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $inputPath;

    /**
     * @var string
     */
    private $outputPath;

    /**
     * State constructor.
     * @param string $name
     * @param string $next
     * @param string|null $inputPath
     * @param string|null $outputPath
     */
    public function __construct(
        string $name,
        string $inputPath = null,
        string $outputPath = null
    ) {
        $this->name = $name;
        $this->inputPath = $inputPath;
        $this->outputPath = $outputPath;
    }

    /**
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getInputPath() : ?string
    {
        return $this->inputPath;
    }

    /**
     * @return string
     */
    public function getOutputPath() : ?string
    {
        return $this->outputPath;
    }
}
