<?php

namespace Dsw\Ifriend\Controllers;

class UserController {

  public function index() {
    global $blade;
    echo $blade->make('index')->render();
    echo "Estoy en user controller";
  
  }
}
