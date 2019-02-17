<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:56 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config;

use Magento\Framework\Config\DataInterface;

/**
 * Class Config
 * @package Magento\Framework\StateMachine\Routine\Config
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
     * @param string $RoutineName
     * @return array
     */
    public function getRoutine(string $RoutineName): ?Data\BaseRoutine
    {
        return $this->data->get($RoutineName);
    }
}