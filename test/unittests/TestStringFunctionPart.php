<?php


namespace unittests;


use PHPUnit\Framework\TestCase;
use TL\basetypes\StringType;

class TestStringFunctionPart extends TestCase
{

  public function test_cutPreFix(){

    $this->assertEquals(
          'World!',
          (string)( new StringType('HalloWorld!'))->cutPreFix('Hallo'),
        'HalloWorld! - Hallo = World! '
      );

    $this->assertEquals(
        'HalloWorld!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HALLO'),
        'HalloWorld! - HALLO = HalloWorld!'
    );

    $this->assertEquals(
        'HalloWorld!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HALLOWORLD!!!'),
        'HalloWorld! - HALLOWORLD!!! = HalloWorld!'
    );

    $this->assertEquals(
        'HalloWorld!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('oW'),
        'HalloWorld! - oW = HalloWorld!'
    );

    $this->assertEquals(
        '!',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HalloWorld'),
        'HalloWorld! - HalloWorld = !'
    );

    $this->assertEquals(
        '',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HalloWorld!'),
        'HalloWorld! - HalloWorld! = '
    );

    $this->assertEquals(
        '',
        (string)( new StringType('HalloWorld!'))->cutPreFix('HalloWorld!123'),
        'HalloWorld! - HalloWorld!123 = '
    );



  }

  public function test_cutPostFix(){
    $this->assertEquals(
        'Hallo',
        (string)( new StringType('HalloWorld!'))->cutPostFix('World!'),
        'HalloWorld! - World! = Hallo'
    );
  }

}