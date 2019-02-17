<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 4:08 PM
 */

namespace Magento\Example\Controller\Index;


use Magento\Framework\App\ResponseInterface;
use Magento\Framework\StateMachine\Config\Data\InvokableStateInterface;

class Index extends \Magento\Framework\App\Action\Action
{

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
//        \Magento\TestFramework\TestCase\HttpClient\CurlClient
        /** @var \Magento\Framework\StateMachine\Config\ConfigInterface $config */
        $config = \Magento\Framework\App\ObjectManager::getInstance()->get(\Magento\Framework\StateMachine\Config\ConfigInterface::class);
        $routineConfig = \Magento\Framework\App\ObjectManager::getInstance()->get(\Magento\Framework\StateMachine\Routine\Config\ConfigInterface::class);
        /** @var \Magento\Framework\StateMachine\StepRunner $stepRunner */
        $stepRunner = \Magento\Framework\App\ObjectManager::getInstance()->get(\Magento\Framework\StateMachine\StepRunner::class);
//        \Magento\Framework\StateMachine\StepRunner
        echo "<pre>";
//        Chain
        $arguments = ['runvars' => [
            'params' => [
                'foo' => [
                    [
                        'value' => 1
                    ]
                ]
            ]
        ]];

        foreach ($config->getScenario('ExampleRun')->getSteps() as $step) {
//            $arguments = $stepRunner->run($step, $arguments);
            if ($step instanceof InvokableStateInterface) {
                $routine = $routineConfig->getRoutine('Magento:Example:Step1');
                print_r($routine);
            }
            print_r($step);
        }
        die;
        // TODO: Implement execute() method.
    }
}