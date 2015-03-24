<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        return $this->render('default/index.html.twig');
    }
    /*
     *K1
     */
    /**
    * @Route("/kawa-mrozona.html", name="kawa-mrozona")
    */
    public function kawaMrozonaAction()
    {
        return $this->render('default/kawa-mrozona.html.twig');
    }
    /*
     * G1
     */
    /*
     * G2
     */
    /*
     * P1
     */
    /*
     * P2
     */
    /*
     * R1
     */
    /**
    * @Route("/grzanki.html", name="grzanki")
    */
    public function grzankiAction()
    {
        return $this->render('default/grzanki.html.twig');
    }
    /*
     * R2
     */
    /*
     * A1
     */
    /**
    * @Route("/ananas-pikantny.html", name="ananas-pikantny")
    */
    public function ananasPikantnyAction()
    {
        return $this->render('default/ananas-pikantny.html.twig');
    }
    /*
     * A2
     */
   

}
