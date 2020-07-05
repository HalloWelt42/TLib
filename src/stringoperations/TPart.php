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
   * Schneidet übereinstimmenden Prfixe vom String ab und gibt das Ergebnis zurück
   *
   * @param string $str_external
   * @return $this|StringType
   */
  public function cutPreFix( $str_external ){

    /**
     * Länge beider Strings ermittel
     */
    $str_len_external = strlen($str_external );
    $str_len_internal = strlen( $this->str );

    /**
     * Externen String auf gleiche Länge bringen,
     * falls der zu bearbeitende String größer ist
     */
    if( $str_len_internal - $str_len_external <= 0 ){
      $str_len_external = $str_len_internal;
      $str_external = substr( $str_external , 0 , $str_len_external);
    }

    /**
     * - Inhalt vergleichen
     * - Bei gleich langen Strings pauschal Leerstring ausgeben
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


  public function cutPostFix( $str_external ){
    $str_len_external = strlen($str_external );
    $str_len_internal = strlen( $this->str );
    $str_len_diff = $str_len_internal-$str_len_external;
    return substr($this->str,0 ,$str_len_diff);

  }


}