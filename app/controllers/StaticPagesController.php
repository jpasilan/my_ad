<?php

class StaticPagesController extends BaseController
{

    public function index()
    {
        return View::make('static.home');
    }
    
    public function ourStory()
    {
        return View::make('static.our-story');
    }
    
    public function aboutUs()
    {
        return View::make('static.about-us');
    }
    
    public function privacyPolicy()
    {
        return View::make('static.privacy-policy');
    }
    
    public function termsAndCondition()
    {
        return View::make('static.terms-and-condition');
    }
    
} 