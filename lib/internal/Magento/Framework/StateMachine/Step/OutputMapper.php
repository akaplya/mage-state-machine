<?php
/**
 * Created by PhpStorm.
 * User: akaplya
 * Date: 2/14/19
 * Time: 12:33 AM
 */

namespace Magento\Framework\StateMachine\Step;

class OutputMapper
{

    /**
     * @param array $step
     * @param array $arguments
     * @param array|null $output
     * @return array
     */
    public function populateArguments(array $step, array $arguments, ?array $output) : array
    {
        $arguments['results'][$step['name']] = $output;
        $arguments['previous'] = $step['name'];
        if (isset($step['outputPath'])) {
            $assigned = $output;
            foreach (array_reverse(explode('/', $step['outputPath'])) as $key) {
                $assigned = [$key => $assigned];
            }
            $arguments = array_replace_recursive($arguments, ['runvars' => $assigned]);
        }
        return $arguments;
    }

//    public function getDataByPath($path)
//    {
//        $keys = explode('/', $path);
//
//        $data = $this->_data;
//        foreach ($keys as $key) {
//            if ((array)$data === $data && isset($data[$key])) {
//                $data = $data[$key];
//            } elseif ($data instanceof \Magento\Framework\DataObject) {
//                $data = $data->getDataByKey($key);
//            } else {
//                return null;
//            }
//        }
//        return $data;
}
