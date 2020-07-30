<?php


namespace TL\basetypes;

use TL\stringoperations\TFunctions;

/**
 * Class StringType
 * @package TL\basetypes
 */
class StringType
{

  /**
   * globaler Import aller definierten Funktionen
   *
   */
  use TFunctions;



  /**
   * Interne Speicherung scalar als String
   *
   * @var string
   */
  protected $str;





  /**
   * Optional StringType oder scalar string übergeben
   *
   * StringType constructor.
   *
   * @param $val string
   */
  public function __construct($val = NULL)
  {
    $this->set($val);
  }




  /**
   * @param $val
   *
   * @return $this
   */
  public function set($val): self
  {

    /**
     * Direkte Übernahme
     */
    if (is_string($val)) {
      $this->str = $val;
    }

    /**
     * ignoriere falsy-Werte und Booleans
     */
    if(
            $val == false
        ||  $val === true
    ){
      return $this;
    }

    /**
     * Speichert intern die Stringrepräsentation übergebener StringType-Objekte
     */
    if( $val instanceof StringType ){
      $this -> set( (string)$val );
      $this->str = $val;
    }

    return $this;
  }





  /**
   * automatisches String-Casting
   *
   * @return string
   */
  public function __toString()
  {
    return (string)$this->str;
  }


}
