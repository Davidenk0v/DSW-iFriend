<?php

namespace Dsw\Ifriend\Controllers;

use Dsw\Ifriend\Models\User_game;

require_once('../src/connection.php');

class UsergameController extends Controller
{
  public function index()
  {
    $router = $this->router;
    $games = User_game::all();
    foreach ($games as $game) {
      echo "<p>$game</p>";
    }
  }
}
