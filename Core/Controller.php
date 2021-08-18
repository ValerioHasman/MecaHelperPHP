<?php

abstract class Controller
{

    public array $dados;
    public static Noticias $noticias;

    public function __construct()
    {
    }

    public function carregarTemplate(string $nomeView, array $dadosModel): void
    {
        require_once 'Views/template.php';
    }
}
