<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class loginController extends Controller
{

  public function validate()
  {
    $_SESSION['id'] = 1;
    $_SESSION['user'] = 'pepe';
    header("Location: /");
  }
  public function logout()
  {

    session_destroy();
    header("Location: /");
  }
}
