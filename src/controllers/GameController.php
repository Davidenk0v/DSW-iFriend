<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\Game;

require_once('../src/connection.php');

class GameController extends Controller
{
  public function index()
  {
    $games = Game::all();
    $router = $this->router;
    echo $this->blade->make('game.list', compact("games", "router"))->render();
  }

  public function create()
  {
    $router = $this->router;
    echo $this->blade->make('game.create_form', compact('router'))->render();
  }
}
