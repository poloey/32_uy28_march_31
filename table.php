<?php 
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

/**
 * dropping table 
 * desc to asc order
 */

Capsule::schema()->dropIfExists('divisions');
Capsule::schema()->dropIfExists('countries');


/**
 * creating table 
 * asc to des 
 */

// single line comment 
# single line comment 


Capsule::schema()->create('countries', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->timestamps();
});

Capsule::schema()->create('divisions', function($t) {
  $t->increments('id');
  $t->string('name');
  $t->integer('country_id')->unsigned();
  $t->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
  $t->timestamps();
});






