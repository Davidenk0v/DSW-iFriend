<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController {

  public function index() {
    $users = User::all();
    global $blade;
    echo $blade->make('user.list', compact("users"))->render();
  }
}
