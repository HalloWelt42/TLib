<?php


namespace TL\traits;


trait TCountable
{
  public function count(){
    count($this -> container );
  }
}