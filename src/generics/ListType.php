<?php


namespace TL\generics;

use ArrayAccess;
use ArrayIterator;
use Countable;
use Exception;
use Iterator;
use TL\listoperations\TArrayAccess;
use TL\listoperations\TCountable;
use TL\listoperations\TIterator;


/**
 * list base
 *
 * Class ListType
 * @package TL\lists
 */
class ListType implements ArrayAccess , Iterator  /*SeekableIterator*/, Countable  /*Serializable*/
{

  use TArrayAccess;
  use TCountable;
  use TIterator;

  /**
   * @var string
   */
  protected $T;

  /**
   * @var array
   */
  protected $container;


  /**
   * ListType constructor.
   * @param null $T
   * @throws Exception
   */
  public function __construct( $T=NULL)
  {
      if( class_exists($T ) === FALSE ){
        throw new Exception();
      };

      $this->T = $T;


    $this -> container = [];
  }


  /**
   * @param mixed $value
   * @throws Exception
   */
  public function typeTest($value): void
  {
    if ($value instanceof $this->T === FALSE) {
      throw new Exception();
    }
  }



}