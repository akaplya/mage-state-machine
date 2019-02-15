<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 12:33 AM
 */

namespace Magento\Framework\StateMachine\Step;

class InputMapper
{
    /**
     * @param array $step
     * @param array $arguments
     * @return array|null
     */
    public function extractParameter(array $step, array $arguments) : ?array
    {
        $required = [];
        if (isset($step['inputPath'])) {
            $required = $arguments['runvars'];
            foreach (explode('/', $step['inputPath']) as $key) {
                $required = $required[$key];
            }
        }
        return $required;
    }
}
