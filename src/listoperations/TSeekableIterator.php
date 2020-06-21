<?php


namespace TL\listoperations;

use OutOfBoundsException;

/**
 * Trait TSeekableIterator
 * @package TL\traits
 */
trait TSeekableIterator
{

  use TIterator;

  /**
   * @param int $position
   */
  public function seek( int $position ) : void
  {
    if (!isset($this->array[$position])) {
      throw new OutOfBoundsException("invalid seek position ({$position})");
    }

    $this->position = $position;

  }

}