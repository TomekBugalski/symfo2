<?php

namespace My\AnimalsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/jaszczurka.html", name="_animals_jaszczurka")
     * @Template()
     */
    public function jaszczurkaAction()
    {
        return array();
    }

}
яяяя