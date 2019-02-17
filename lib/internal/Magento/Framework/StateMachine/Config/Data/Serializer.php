<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 5:03 PM
 */

namespace Magento\Framework\StateMachine\Config\Data;

use Magento\Framework\Serialize\SerializerInterface;

/**
 * Class Serializer
 * @package Magento\Framework\StateMachine\Config\Data
 */
class Serializer implements SerializerInterface
{

    /**
     * Serialize data into string
     *
     * @param string|int|float|bool|array|null $data
     * @return string|bool
     * @throws \InvalidArgumentException
     * @since 100.2.0
     */
    public function serialize($data)
    {
        return serialize($data);
    }

    /**
     * Unserialize the given string
     *
     * @param string $string
     * @return string|int|float|bool|array|null
     * @throws \InvalidArgumentException
     * @since 100.2.0
     */
    public function unserialize($string)
    {
        return unserialize($string);
    }
}
