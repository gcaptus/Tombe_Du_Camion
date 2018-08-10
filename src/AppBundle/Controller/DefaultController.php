<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\FormType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */

    public function indexAction()
    {
        
        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Product');
        $venteflash = $repo->findBy(
            array('discountStatus' => 'vente_flash'));
        $promo = $repo->findBy(
            array('discountStatus' => 'promo'));
        $topvente = $repo->findBy(
            array('discountStatus' => 'top_vente'));

            return $this->render('default/index.html.twig',array(
               
              
                'venteflash' => $venteflash,
                'promo' => $promo,
                'topvente' => $topvente,

            ));
   }
   
/**
     * @Route("/results", name="results")
     */
   public function menuAction(Request $request)
{   
        $formBuilder = $this->createFormBuilder();

        $formBuilder

         

            ->add('Rechercher', SearchType::class)

            ->add('save',      SubmitType::class, array('label' => 'Rechercher'))
        ;
        $form = $formBuilder->getForm();
    
        $form->handleRequest($request);
      

            if ($form->isSubmitted() && $form->isValid())
        {  

            $res = $form->getData();
            $key = $res['Rechercher'];

            
             $em = $this->getDoctrine()->getEntityManager();
            $product = $em->getRepository('AppBundle:Product')->findProduct($key);
            
            return $this->render('default/results.html.twig', array(
                'form' => $form->createView(),
               'product' => $product,

             ));
            
         }

         else
         {

             return $this->render('default/menu.html.twig', array(
               
                'form' => $form->createView(),


            ));
            
         }
     }

}
