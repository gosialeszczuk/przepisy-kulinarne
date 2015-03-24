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
   /**
    * @Route("/kocie-oczka.html", name="kocie-oczka")
    */
    public function kocieoczkaAction()
    {
        return $this->render('default/kocie-oczka.html.twig');
    }
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
    /**
    * @Route("/amoniaczki.html", name="amoniaczki")
    */
    public function amoniaczkiAction()
    {
        return $this->render('default/amoniaczki.html.twig');
    }
    /*
     * L1
     */
    /**
    * @Route("/jajka-zapiekane.html", name="jajka-zapiekane")
    */
    public function jajkaZapiekaneAction()
    {
        return $this->render('default/jajka-zapiekane.html.twig');
    }   
    /*
     * L2
     */
   /**
    * @Route("/zupa-z-kurczaka.html", name="zupa-z-kurczaka")
    */
    public function zupaZKurczakaAction()
    {
        return $this->render('default/zupa-z-kurczaka.html.twig');
    }
}
