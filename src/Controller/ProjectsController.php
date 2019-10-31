<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProjectsController extends AbstractController
{
    /**
     * @Route("/index", name="projects")
     */
    public function index()
    {   
        $projects = array();
        $projects[0]= "Project 1";
        $projects[1]= "Project 2";
        $projects[2]= "Project 3";

        return $this->render('projects/index.html.twig', [
            'controller_name' => 'ProjectsController',
            'projects' => $projects,
        ]);
    }
}

