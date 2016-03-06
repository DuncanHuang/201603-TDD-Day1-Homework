<?php

/**
 * Created by PhpStorm.
 * User: duncan
 * Date: 2016/3/5
 * Time: 下午9:32
 */
class sellAnalysisTest extends PHPUnit_Framework_TestCase
{
    private function getData()
    {
        $data = array(
            array('Id' => 1, 'Cost' => 1, 'Revenue' => 11, 'SellPrice' => 21),
            array('Id' => 2, 'Cost' => 2, 'Revenue' => 12, 'SellPrice' => 22),
            array('Id' => 3, 'Cost' => 3, 'Revenue' => 13, 'SellPrice' => 23),
            array('Id' => 4, 'Cost' => 4, 'Revenue' => 14, 'SellPrice' => 24),
            array('Id' => 5, 'Cost' => 5, 'Revenue' => 15, 'SellPrice' => 25),
            array('Id' => 6, 'Cost' => 6, 'Revenue' => 16, 'SellPrice' => 26),
            array('Id' => 7, 'Cost' => 7, 'Revenue' => 17, 'SellPrice' => 27),
            array('Id' => 8, 'Cost' => 8, 'Revenue' => 18, 'SellPrice' => 28),
            array('Id' => 9, 'Cost' => 9, 'Revenue' => 19, 'SellPrice' => 29),
            array('Id' => 10, 'Cost' => 10, 'Revenue' => 20, 'SellPrice' => 30),
            array('Id' => 11, 'Cost' => 11, 'Revenue' => 21, 'SellPrice' => 31),
        );

        return $data;
    }

    public function test_threeRowsGroup_cal_sumCost()
    {
        // Arrange
        $analysis = new \homework\sellAnalysis();

        // Act
        $rowsGroup = 3;
        $groupName = 'Cost';
        $groupNum  = 4;
        $target    = $analysis->analysis($this->getData(), $rowsGroup, $groupName);

        // Assert
        $this->assertCount($groupNum, $target);
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
        $groupNum  = 3;
        $target    = $analysis->analysis($this->getData(), $rowsGroup, $groupName);

        // Assert
        $this->assertCount($groupNum, $target);
        $this->assertEquals(50, $target[0]);
        $this->assertEquals(66, $target[1]);
        $this->assertEquals(60, $target[2]);
    }
}
