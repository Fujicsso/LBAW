<?php

namespace App\Specs;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
  // Don't add create and update timestamps in database.
  public $timestamps  = false;
  protected $table = 'ram';
}
