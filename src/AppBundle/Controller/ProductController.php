<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

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
         $repo = $this->getDoctrine()
        ->getManager()
        ->getRepository('AppBundle:Product');
         $product = $repo->findAll();
        return $this->render('@App/Product/promo.html.twig', array(
            'product' => $product,
        ));
    }

}
