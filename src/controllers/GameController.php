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

}
