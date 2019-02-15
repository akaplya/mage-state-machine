<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:56 PM
 */

namespace Magento\Framework\StateMachine\CallResource\Config;

use Magento\Framework\Config\DataInterface;

/**
 * Class Config
 * @package Magento\Framework\StateMachine\CallResource\Config
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
     * @param string $CallResourceName
     * @return array
     */
    public function getCallResource(string $CallResourceName): array
    {
        return $this->data->get($CallResourceName);
    }
}