<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\Form;
use App\Service\EmailSender;
use App\Controller\ParentController;
use App\Service\Router;

class MainController extends ParentController
{
    public function home()
    {
        
        $title = "Celle-ce est la page d'accueil";

        $this->render('home', [ 
            'title' =>  $title
        ]);
    }
}