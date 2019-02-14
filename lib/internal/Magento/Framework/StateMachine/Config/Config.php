<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/13/19
 * Time: 4:24 PM
 */

namespace Magento\Framework\StateMachine\Config;

use Magento\Framework\Config\DataInterface;

/**
 * Config of Analytics.
 */
class Config implements ConfigInterface
{
    /**
     * @var DataInterface
     */
    private $data;

    /**
     * @param DataInterface $data
     */
    public function __construct(DataInterface $data)
    {
        $this->data = $data;
    }

    /**
     * @param string $scenarioName
     * @return array
     */
    public function getScenario(string $scenarioName): array
    {
        return $this->data->get($scenarioName);
    }

    /**
     * @param string $scenarioName
     * @return array
     */
    public function getScenarioSteps(string $scenarioName): array
    {
        $scenario = $this->data->get($scenarioName);
        return $scenario['step'];
    }
}
