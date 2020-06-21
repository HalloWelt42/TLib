<?php


namespace TL\listoperations;


trait TCountable
{

  /**
   * @return int
   */
  public function count(){
    return count($this -> container );
  }
}