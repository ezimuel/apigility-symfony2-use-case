<?php

namespace Blog\ExampleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;

class HelloWorldController extends Controller
{
    /**
     * @Route("/hello/world")\
     */
    public function indexAction()
    {
        $response = new Response('<html><body>Hello world</body></html>');
        return $response;
    }
}
