<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $this->view("Hello");
    }

    public function about()
    {
        echo "This is ABOUT";
    }
}
