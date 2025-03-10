<?php

require "model/UsuarioModel.php";

class HomeController
{
    public function Index()
    {
        include "view/Index.php";
    }
    public function Login()
    {
        include "view/Login.php";
    }
    public function Listar()
    {
        include "view/Listar.php";
    }
    public function Confirmar()
    {
        include "view/Confirmar.php";
    }
    public function Painel()
    {
        $model = new UsuarioModel();
        $usuario = $model->UsuarioLogado();
        include "view/Painel.php";
    }
}