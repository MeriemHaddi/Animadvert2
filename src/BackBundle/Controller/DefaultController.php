<?php

namespace BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use BackBundle\BackBundle;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@Back/back.html.twig',[
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
