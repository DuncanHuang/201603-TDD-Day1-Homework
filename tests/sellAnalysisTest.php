<?php

/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2016/3/5
 * Time: 下午9:32
 */

class sellAnalysisTest extends PHPUnit_Framework_TestCase
{
    public function test_threeRowsGroup_cal_sumCost()
    {
        // Arrange
        $analysis = new \homework\sellAnalysis();

        // Act
        $rowsGroup = 3;
        $groupName = 'Cost';
        $target    = $analysis->analysis($rowsGroup, $groupName);

        // Assert
        $this->assertCount((int) ceil($analysis->getRows() / $rowsGroup), $target);
        $this->assertEquals(6, $target[0]);
        $this->assertEquals(15, $target[1]);
        $this->assertEquals(24, $target[2]);
        $this->assertEquals(21, $target[3]);
    }

    public function test_fourRowsGroup_cal_sumRevenue()
    {
        // Arrange
        $analysis = new \homework\sellAnalysis();

        // Act
        $rowsGroup = 4;
        $groupName = 'Revenue';
        $target    = $analysis->analysis($rowsGroup, $groupName);

        // Assert
        $this->assertCount((int) ceil($analysis->getRows() / $rowsGroup), $target);
        $this->assertEquals(50, $target[0]);
        $this->assertEquals(66, $target[1]);
        $this->assertEquals(60, $target[2]);
    }
}
