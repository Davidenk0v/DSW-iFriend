<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User;

require_once('../src/connection.php');

class UserController extends Controller
{

  public function index()
  {
    $users = User::all();
    $router = $this->router;
    echo $this->blade->make('user.list', compact("users", "router"))->render();
  }

  public function delete($params)
  {
    $id = $params['id'];
    $user = User::find($id);
    $user->delete();
    header('Location: /user');
  }

  public function create()
  {
    $router = $this->router;
    echo $this->blade->make('user.create_form', compact('router'))->render();
  }

  public function post()
  {
    //Hay que validar los datos antes de añadirlos
    $user = new User;
    $user->name = $_POST['name'];
    $user->password = $_POST['password'];
    $user->mail = $_POST['email'];
    $user->save();
    header('Location: /user');
  }
  public function edit($params)
  {
    $id = $params['id'];
    $router = $this->router;
    $user = User::find($id);
    echo $this->blade->make('user.update_form', compact('router', 'user'))->render();
  }

  public function update()
  {
    $user = User::find($_POST['id']);
    $user->name = $_POST['name'];
    $user->password = $_POST['password'];
    $user->mail = $_POST['email'];
    $user->save();
    header('Location: /user');
  }
}
