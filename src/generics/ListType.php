<?php


namespace TL\generics;

use ArrayAccess;
use Countable;
use Exception;
use SeekableIterator;
use TL\listoperations\TArrayAccess;
use TL\listoperations\TCountable;
use TL\listoperations\TIterator;
use TL\listoperations\TSeekable;


/**
 * list base
 *
 * Class ListType
 * @package TL\lists
 */
class ListType implements ArrayAccess , SeekableIterator, Countable  /*Serializable*/
{

  use TArrayAccess;
  use TCountable;
  use TSeekable;
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
