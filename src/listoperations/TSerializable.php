<?php


namespace TL\listoperations;


trait TSerializable
{
  public function serialize(){
    $unserialized='';
    return (string)$unserialized;
  }
  public function unserialize( $serialized ){

  }

}