<?php


namespace TL\traits;


use Exception;

/**
 * Trait TArrayAccess
 * @package TL\lists
 */
trait TArrayAccess
{


  /**
   * @var int
   */
  protected $position;


  /**
   * @inheritDoc
   */
  public function offsetExists($offset)
  {
    return isset($this->container[$offset]);
  }

  /**
   * @inheritDoc
   */
  public function offsetGet($offset) {
    return isset($this->container[$offset]) ? $this->container[$offset] : null;
  }

  /**
   * this section goes into the class used / function protected or public typeTest( $value )
   *
   *    if( $val instanceof ExampleType === false ){
   *      throw new Exception();
   *    }
   *
   *
   * @inheritDoc
   */
  public function offsetSet($offset, $value) {

    try {
      $this->typeTest($value);
    }catch (Exception $exception){
      error_log($exception->getTraceAsString() );
      exit;
    }

    if (is_null($offset)) {
      $this->container[] = $value;
    } else {
      $this->container[$offset] = $value;
    }
  }

  /**
   * @inheritDoc
   */
  public function offsetUnset($offset) {
    unset($this->container[$offset]);
  }
}