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

    /**
     * @Route("/zaskroniec.html", name="_animals_zaskroniec")
     * @Template()
     */
    public function zaskroniecAction()
    {
        return array();
    }

    /**
     * @Route("/zmija.html", name="_animals_zmija")
     * @Template()
     */
    public function zmijaAction()
    {
        return array();
    }

}
яя