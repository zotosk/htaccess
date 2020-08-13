<?php

class Pages extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $data = [
            'title' => 'Welcome to the Home page'
        ];


        $this->view('pages/index', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'Welcome to the ABOUT page'
        ];

        $this->view('pages/about', $data);
    }
}
