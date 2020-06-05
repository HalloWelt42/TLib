<?php


namespace TL\lists;

use ArrayIterator;
use TL\traits\TArrayIterator;


/**
 * list base
 *
 * Class ListType
 * @package TL\lists
 */
class ListType extends ArrayIterator
{
  use TArrayIterator;

  const STD_PROP_LIST = 1;
  const ARRAY_AS_PROPS = 2;


  /**
   * @var array
   */
  protected $container;


  /**
   * create type safety of $value
   *
   * hint:
   *   - you can override this function for your implementation
   *
   *
   * @param object $value
   * @return bool
   */
  protected function typeTest(object $value): bool
  {
    if (is_object($value)) {
      return TRUE;
    }
    return FALSE;
  }

}