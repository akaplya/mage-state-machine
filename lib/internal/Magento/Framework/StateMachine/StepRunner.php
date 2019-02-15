<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 12:31 AM
 */

namespace Magento\Framework\StateMachine;

/**
 * Class StepRunner
 * @package Magento\Framework\StateMachine
 */
class StepRunner
{
    /**
     * @var Step\InputMapper
     */
    private $inputMapper;

    /**
     * @var Step\OutputMapper
     */
    private $outputMapper;

    /**
     * @var Step\Invoker
     */
    private $invoker;

    /**
     * StepRunner constructor.
     * @param Step\InputMapper $inputMapper
     * @param Step\OutputMapper $outputMapper
     * @param Step\Invoker $invoker
     */
    public function __construct(
        Step\InputMapper $inputMapper,
        Step\OutputMapper $outputMapper,
        Step\Invoker $invoker
    ) {

        $this->inputMapper = $inputMapper;
        $this->outputMapper = $outputMapper;
        $this->invoker = $invoker;
    }

    /**
     * @param array $step
     * @param array $arguments
     * @return array
     */
    public function run(array $step, array $arguments) : array
    {
        $parameters = $this->inputMapper->extractParameter($step, $arguments);
        $output = $this->invoker->invoke($step, $parameters);
        $arguments = $this->outputMapper->populateArguments($step, $arguments, $output);
        return $arguments;
    }
}
