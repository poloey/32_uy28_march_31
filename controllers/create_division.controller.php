<?php

if (isset($_POST['name'])) {
  Division::create([
    'name' => $_POST['name'],
    'country_id' => $_POST['country_id']
  ]);
}

$countries = Country::all();
require __DIR__ . '/../views/create_division.view.php';