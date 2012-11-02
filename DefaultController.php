<?php

namespace My\NovelBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/{slug}.html", name="show")
     * @Template()
     */
    public function showAction($slug = 'index')
    {
        $slugs = array();

        $indexFile = file('../data/00index.log');

        foreach ($indexFile as $tmp) {
            $e = explode('|', trim($tmp));
            $slugs[] = $e[1];
        }

        if (!in_array($slug, $slugs)) {
            throw $this->createNotFoundException('Podana strona nie istnieje!');
        }

        $contents = file('../data/' . $slug . '.txt');
        $title = array_shift($contents);
        $novel = array(
            'title' => trim($title),
            'contents' => $contents
        );
        return compact('novel');
    }

    /**
     * @Template()
     */
    public function menuAction()
    {
        $menuData  = array();
        $indexFile = file('../data/00index.log');
        foreach ($indexFile as $tmp) {
            $e = explode('|', trim($tmp));
            $menuData[] = array(
                'title' => $e[0],
                'slug' =>  $e[1]
            );
        }
        return compact('menuData');
    }

}
