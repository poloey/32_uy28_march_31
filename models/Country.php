<?php

//alias  - as

use Illuminate\Database\Eloquent\Model as Eloquent;

class Country extends Eloquent {
  // protected $table = 'countries';
  // id, name, created_at, updated_at
  protected $guarded = [];
  
  public function divisions () {
    return $this->hasMany(Division::class);
  }

  // protected $fillable = ['name', 'id'];
}