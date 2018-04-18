<?php

namespace Dolibarr\Core\ThemeBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PreviewController extends Controller
{
    /**
     * @Route("/preview/{Name}", name="core_theme_preview")
     */
    public function index($Name = null)
    {
        return $this->render('@DolibarrTheme/preview/index.html.twig', [
            'Name' => $Name,
        ]);
    }
    
}
