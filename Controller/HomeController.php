<?php

class HomeController extends Controller
{

    public function index(): void
    {
        $this->carregarTemplate('home', array());
    }
}
