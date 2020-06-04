<?php


namespace TL\lists;



namespace GDV2IMA\model\gdv;


use Exception;

trait TArrayAccess
{

  /**
   * @var array
   */
  protected $container;

  /**
   * @var int
   */
  protected $position;

  public function __construct()
  {
    $this->container=[];
    $this->position = 0;

  }

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
   * @inheritDoc
   */
  public function offsetSet($offset, $value) {

    try {
      $this->type_testing($value);
    }catch (Exception $exception){
      print_r($exception->getTraceAsString());
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