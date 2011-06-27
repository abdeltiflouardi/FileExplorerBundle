<?php

namespace OS\FileExplorerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('OSFileExplorerBundle:Default:index.html.twig', array('name' => $name));
    }
}
