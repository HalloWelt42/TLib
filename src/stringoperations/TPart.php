<?php


namespace TL\stringoperations;


use TL\basetypes\StringType;



/**
 * String-Abschnitt selektieren
 *
 * Trait TPart
 * @package TL\stringoperations
 */
trait TPart
{


  /**
   * @param string $str
   * @return $this|StringType
   */
  public function cutPreFix( $str ){

    $str_len_external = strlen($str );
    $str_len_internal = strlen( $this->str );
    $str_len_div = $str_len_internal - $str_len_external;

    if( $str_len_div <= 0 ){
      $str_len_external = $str_len_internal;
    }

    $sub_str = substr( $this->str , 0 , $str_len_external);

    if ($sub_str === $str) {
      return new StringType(
          substr($this->str, $str_len_external, $str_len_div)
      );
    }

    return new StringType($this -> str );
  }


}