<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController{
    public function index(){
        $usuario = "Teste";
        $this->set(['usuarios' => $usuario]);
    }
}