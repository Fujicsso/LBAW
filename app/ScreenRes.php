<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ScreenRes extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'public.screenres';

  public static function list()
  {
    return $res = screenRes::pluck('value', 'id');
  }
}