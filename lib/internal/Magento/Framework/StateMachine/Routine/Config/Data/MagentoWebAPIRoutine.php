<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/16/19
 * Time: 4:14 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config\Data;

/**
 * Class MagentoWebAPIRoutine
 * @package Magento\Framework\StateMachine\Routine\Config\Data
 */
class MagentoWebAPIRoutine extends BaseRoutine
{
    /**
     * @var string
     */
    private $method;

    /**
     * @var string
     */
    private $url;

    /**
     * MagentoWebAPIRoutine constructor.
     *
     * @param string $name
     * @param string $method
     * @param string $url
     */
    public function __construct(
        string $name,
        string $method,
        string $url
    ) {
        parent::__construct($name);
        $this->method = $method;
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getMethod() : string
    {
        return $this->method;
    }

    /**
     * @return string
     */
    public function getUrl() : string
    {
        return $this->url;
    }
}
