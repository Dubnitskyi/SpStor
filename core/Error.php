<?php

namespace core;

class Error
{
  public $code;
  public $messeg;
  public function __construct($code,$messeg)
  {
    $this->messeg = $messeg;
    $this->code = $code;
  }
}