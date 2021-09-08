<?php

class HomeController extends Controller
{

    public function index(): void
    {
        $this->carregarTemplate('Home', array());
    }

    public function sobre(): void
    {
        $this->carregarTemplate('Sobre', array());
    }

    public function contato(): void
    {
        $this->carregarTemplate('Contato', array());
    }
}
