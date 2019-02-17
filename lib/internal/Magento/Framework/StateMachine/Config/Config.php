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
     * @return Data\Scenario
     */
    public function getScenario(string $scenarioName) : Data\Scenario

    {
        return $this->data->get($scenarioName);
    }

}

