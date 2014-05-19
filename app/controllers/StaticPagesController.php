<?php

class StaticPagesController extends BaseController
{
    
    /**
     * Static Homepage
     * 
     * @return mixed
     */
    public function index()
    {
        return View::make('static.home');
    }
    
    /**
     * Static OurStory Page
     * 
     * @return mixed
     */
    public function ourStory()
    {
        return View::make('static.our-story');
    }
    
    /**
     * Static About Us Page
     * 
     * @return mixed
     */
    public function aboutUs()
    {
        return View::make('static.about-us');
    }
    
    /**
     * Static Privacy Policy Page
     * 
     * @return mixed
     */
    public function privacyPolicy()
    {
        return View::make('static.privacy-policy');
    }
    
    /**
     * Static Terms and Condition Page
     * 
     * @return mixed
     */
    public function termsAndCondition()
    {
        return View::make('static.terms-and-condition');
    }
    
} 