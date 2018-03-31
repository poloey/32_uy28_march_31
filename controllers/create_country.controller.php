<?php

if (isset($_POST['name'])) {
  Country::create([
    'name' => $_POST['name']
  ]);
}



require __DIR__ . '/../views/create_country.view.php';