<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Division extends Eloquent {
  protected $guarded = [];
  public function country()
  {
    $this->belongsTo(Country::class);
  }
}