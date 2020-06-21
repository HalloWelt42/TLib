<?php


namespace unittests;


use PHPUnit\Framework\TestCase;
use TL\basetypes\StringType;

class TestStringFunctionPart extends TestCase
{

  public function testPart(){

    $this->assertEquals(
        'World!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('Hallo')
    );

    $this->assertEquals(
        'HalloWorld!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HALLO')
    );

    $this->assertEquals(
        'HalloWorld!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('oW')
    );

    $this->assertEquals(
        '!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HalloWorld')
    );

    $this->assertEquals(
        '',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HalloWorld!')
    );

    $this->assertEquals(
        '',
        (string)( new StringType(''))->cutPreFix('HalloWorld!123')
    );



  }

}