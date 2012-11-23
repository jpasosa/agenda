<?php

namespace Agenda\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackController extends Controller {
    

    public function indexAction() {
        return $this->render('AgendaBackendBundle:Back:index.html.twig');
    }



}
