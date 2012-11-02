<?php

namespace My\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/jaszczurka.html", name="_jaszczurka")
     * @Template()
     */
    public function jaszczurkaAction()
    {
        return array();
    }
    
    /**
     * @Route("/zaba.html", name="_zaba")
     * @Template()
     */
    public function zabaAction()
    {
        return array();
    }

}
