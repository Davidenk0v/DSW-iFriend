<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\Game;

require_once('../src/connection.php');

class GameController extends Controller
{
  public function index()
  {
    $router = $this->router;
    $games = Game::where([
      'id_admin' => $_SESSION["id"]
    ])->get();
    echo $this->blade->make('game.list', compact("games", "router"))->render();
  }

  public function create()
  {
    $router = $this->router;
    echo $this->blade->make('game.create_form', compact('router'))->render();
  }
  public function post()
  {
    //Hay que validar los datos antes de añadirlos
    $games = new Game;
    $games->name = $_POST['name'];
    $games->id_admin = $_SESSION['id'];
    $games->save();
    header('Location: /game');
  }
}
