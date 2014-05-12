<?php

class StaticPagesController extends BaseController
{

    public function index()
    {
        return View::make('static.home');
    }
} 