<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/fiche/{slug}", name="product_file")
     */
    public function productAction($slug){
    $em = $this->getDoctrine()->getEntityManager();
    $product = $em->getRepository('AppBundle:Product')->findProduct($slug);

    return $this->render('default/fileProduct.html.twig', array(
    'product' => $product));
    }
}