<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/15/19
 * Time: 1:58 PM
 */

namespace Magento\Framework\StateMachine\Routine\Config\Converter;

use Magento\Framework\StateMachine\Routine\Config\Data\BaseRoutine;
use Magento\Framework\ObjectManagerInterface;

/**
 * Class Structure
 * @package Magento\Framework\StateMachine\Routine\Config\Converter
 */
class Structure
{
    private static $routinesMapping = [
        'MagentoWebAPIRoutine' => \Magento\Framework\StateMachine\Routine\Config\Data\MagentoWebAPIRoutine::class
    ];
    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    /**
     * Structure constructor.
     * @param ObjectManagerInterface $objectManager
     */
    public function __construct(
        ObjectManagerInterface $objectManager
    ) {
        $this->objectManager = $objectManager;
    }

    /**
     * @param string $name
     * @return BaseRoutine
     */
    public function createRoutine(array $routineData) : BaseRoutine
    {
        return $this->objectManager->create(self::$routinesMapping[$routineData['type']], $routineData);
    }

    /**
     * @param array $source
     * @return array
     */
    public function convert(array $source) : array
    {
        $output = [];
        foreach ($source['routines'][0]['routine'] as $routineData) {
            $output[$routineData['name']] = $this->createRoutine($routineData);
        }
        return $output;
    }
}