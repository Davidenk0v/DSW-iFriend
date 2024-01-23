<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class loginController extends Controller
{

  public function validate()
  {
    $user = User::where([
      ['name', $_POST['user']],
      ['password', $_POST['password']],
    ])->first();
    
    if($user) {
      $_SESSION['id'] = $user->id;
      $_SESSION['user'] = $user->name;
    }
    header("Location: /");
  }
  public function logout()
  {

    session_destroy();
    header("Location: /");
  }
}
