<?php

namespace Startplatz\Bundle\WordpressIntegrationDemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LandingPageController extends Controller
{

    public function indexAction()
    {
        return new Response('hello world');
    }
}
