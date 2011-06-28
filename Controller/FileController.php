<?php

namespace OS\FileExplorerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class FileController extends Controller
{
    
    public function indexAction()
    {
        $cd = $this->getRequest()->get('cd', '/');
        
        $files = new \DirectoryIterator($cd);
        
        return $this->render('OSFileExplorerBundle:File:index.html.twig', compact('files'));
    }
}
