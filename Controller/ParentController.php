<?php

namespace App\Controller;

abstract class ParentController 
{
    protected function render(string $view, array $viewVars = []): void
    {
        $loader = new \Twig\Loader\FilesystemLoader(__DIR__.'/../view');
        $twig = new \Twig\Environment($loader, [
            'cache' => false,
        ]);
        

        echo $twig->render($view.'.html.twig', $viewVars);
        die;
    }
}