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
    if (isset($_POST['name'])) {
      $games = new Game;
      $games->name = $_POST['name'];
      $games->id_admin = $_SESSION['id'];
      $games->save();
      $_SESSION['alert'] = "Partida creada correctamente";
      header('Location: /game');
    } else {
      $_SESSION['alert'] = "Debes rellenar todos los campos";
    }
  }

  public function delete($params)
  {
    $id = $params['id'];
    $game = Game::find($id);
    if ($game) {
      $game->delete();
    }
    header('Location: /game');
  }

  public function edit($params)
  {
    $id = $params['id'];
    $game = Game::find($id);
    if ($game) {
      $router = $this->router;
      echo $this->blade->make('game.update_form', compact('game', 'router'))->render();
    }
  }

  public function update()
  {
    $game = Game::find($_POST['id']);
    $game->name = $_POST['name'];
    $game->update();
    header("Location: /game");
  }
}
