<?php

class HomeController extends Controller
{

    public function index(): void
    {
        $this->carregarTemplate('home', array());
    }

    public function sobre(): void
    {
        $this->carregarTemplate('sobre', array());
    }

    public function contato(): void
    {
        $this->carregarTemplate('contato', array());
    }
}
