<?php
namespace controller;

class Home
{
    public $page = '';

    public function __construct( )
    {
        $this->page = $_SERVER['REQUEST_URI'];
    }

    public function home( )
    {
        echo "this is the page".$this->page;
    }

    public function about( )
    {
        echo "about".$this->page;
    }

}