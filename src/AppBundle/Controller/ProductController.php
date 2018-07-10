<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/edit")
     */
    public function editAction()
    {
        return $this->render('AppBundle:Product:edit.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete")
     */
    public function deleteAction()
    {
        return $this->render('AppBundle:Product:delete.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/create")
     */
    public function createAction()
    {
        return $this->render('AppBundle:Product:create.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/quantity")
     */
    public function quantityAction()
    {
        return $this->render('AppBundle:Product:quantity.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/promo")
     */
    public function promoAction()
    {
        return $this->render('AppBundle:Product:promo.html.twig', array(
            // ...
        ));
    }

}
