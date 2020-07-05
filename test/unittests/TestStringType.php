<?php


namespace unittests;


use PHPUnit\Framework\TestCase;
use stdClass;
use TL\basetypes\StringType;

class TestStringType extends TestCase
{

  public function testString(){

    $str_obj = new StringType();
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType(true);
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType(false);
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType(null);
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType(new stdClass());
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType([]);
    $this->assertEquals('',(string)$str_obj);

    $str_obj = new StringType('test');
    $this->assertEquals('test',(string)$str_obj);

    $str = 'test';
    $str_obj = new StringType($str);
    $this->assertEquals('test',(string)$str);

  }

}
