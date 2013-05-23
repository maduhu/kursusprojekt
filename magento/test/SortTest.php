<?php

class SortTest extends PHPUnit_Framework_TestCase {

    protected $sort;
    protected $products;

    protected function setUp() {
        $this->sort = new Sort();
        $this->products = array();
        array_push($products, new Product('Ur', 10, mktime(0,0,0,1,1,2000)));
        array_push($products, new Product('Ring', 20, mktime(0,0,0,1,3,2000)));
        array_push($products, new Product('Armbånd', 40, mktime(0,0,0,1,5,2000)));
    }

    protected function tearDown() {
        unset($products);
        unset($sort);
    }

    public function testSortByName() {
        $actual = $this->sort->sortBy($this->products, 'name');
        $expected = array($this->products[2],$this->products[1],$this->products[0]);
        $this->assertEquals($expected, $actual);
    }
}
