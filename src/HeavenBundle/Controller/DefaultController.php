<?php

namespace HeavenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HeavenBundle\HeavenBundle;
use BackBundle\BackBundle;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $user=null;
        if( $this->container->get( 'security.authorization_checker' )->isGranted( 'IS_AUTHENTICATED_FULLY' ) )
        {
            $user = $this->container->get('security.token_storage')->getToken()->getUser();
        }

        if(in_array('ROLE_ADMIN',$user->getRoles()))
        {
            return $this->redirectToRoute('back_homepage');
        }

        return $this->render('@Heaven/layout.html.twig',[
        'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

}
