<?php


namespace TL\traits;


trait TCountable
{

  /**
   * @return int
   */
  public function count(){
    return count($this -> container );
  }
}