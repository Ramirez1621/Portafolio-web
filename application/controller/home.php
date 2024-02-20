<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Home extends Controller
{
    /**
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function index()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function about()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/bannerabout.php';
        require APP . 'view/home/about.php';
        require APP . 'view/_templates/footer.php';
    }
    public function service()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/bannerservice.php';
        require APP . 'view/home/service.php';
        require APP . 'view/_templates/footer.php';
    }
    public function portfolio()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/bannerportfolio.php';
        require APP . 'view/home/portfolio.php';
        require APP . 'view/_templates/footer.php';
    }
    public function price()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/bannerprice.php';
        require APP . 'view/home/price.php';
        require APP . 'view/_templates/footer.php';
    }
    public function contact()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/_templates/bannercontact.php';
        require APP . 'view/home/contact.php';
        require APP . 'view/_templates/footer.php';
    }
}
