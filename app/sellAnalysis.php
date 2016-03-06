<?php
/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2016/3/5
 * Time: 下午7:49
 */

namespace homework;

class sellAnalysis
{
    public function analysis($data, $rowsGroup, $groupName)
    {
        $chunk = array_chunk($data, $rowsGroup);

        $sum = array();
        foreach ($chunk as $groupKey => $groupItem) {
            foreach ($groupItem as $item) {
                if (isset($sum[$groupKey]) == false) {
                    $sum[$groupKey] = 0;
                }
                $sum[$groupKey] += $item[$groupName];
            }
        }

        return $sum;
    }
}
