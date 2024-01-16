<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController {

  public function index() {
    $users = User::all();
    global $blade;
    echo $blade->make('index')->render();
    echo "Estoy en user controller";
    echo "<pre>($users) </pre>";
  
  }
}
