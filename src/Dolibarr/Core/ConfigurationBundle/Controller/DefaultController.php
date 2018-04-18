<?php

namespace Dolibarr\Core\ConfigurationBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="config")
     */
    public function index()
    {
        
        dump($this->getDoctrine()->getRepository("DolibarrConfigurationBundle:Value")->findAll());
        
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
    
    
    /**
     * @Route("/list", name="Dolibarr Core Configuration List")
     */
    public function listAction(Request $request)
    {
        
$request->getSession()
        ->getFlashBag()
        ->add('success', 'Welcome to the Death Star, have a magical day!')
    ;
        
        dump($this->getDoctrine()->getRepository("DolibarrConfigurationBundle:Value")->findAll());
        
        return $this->render('@DolibarrConfiguration/list.html.twig', [
            'controller_name' => 'DefaultController',
            'values'            => $this->getDoctrine()->getRepository("DolibarrConfigurationBundle:Value")->findAll()
        ]);
    }    
}
