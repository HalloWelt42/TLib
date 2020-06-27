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
   * Schneidet übereinstimmenden Prfixe vom String ab und gibt das ergebnis zurück
   *
   * @param string $str_external
   * @return $this|StringType
   */
  public function cutPreFix( $str_external ){

    $str_len_external = strlen($str_external );
    $str_len_internal = strlen( $this->str );

    /**
     * auf gleiche Länge bringen
     */
    if( $str_len_internal - $str_len_external <= 0 ){
      $str_len_external = $str_len_internal;
      $str_external = substr( $str_external , 0 , $str_len_external);
    }

    /**
     * Inhalt vergleichen, bei gleich langen Strings
     */
    if( $str_external === $this->str ){
      return new StringType('');
    }

    /**
     * Differenz ausgeben, wenn Inhalt im Prefix gleich ist
     */
    $prefix = substr( $this->str , 0,$str_len_external);
    if( $prefix === $str_external ){
      return new StringType(
          substr( $this->str , $str_len_external , $str_len_internal )
      );
    }

    /**
     * Keine übereinstimmungen -> ohne Veränderung ausgeben
     */
    return $this;

  }


}