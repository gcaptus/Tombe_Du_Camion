<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

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
            array('discountStatus' => 'meilleurs ventes'));

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

            ->add('Categories', ChoiceType::class, array(
              
                'choices'  => array(
                'All' => "All",
                'Cpu' => "Cpu",
                 'Memory' => "Memory",
                'Motherboard' => "Motherboard",

                ),
))
            ->add('save',      SubmitType::class, array('label' => "Rechercher"))

        ;
        $form = $formBuilder->getForm();
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getEntityManager();
      

            if ($form->isSubmitted() && $form->isValid())
        {  


            $res = $form->getData();
            $key = $res['Rechercher'];
            $filter = $res['Categories'];
           
           if ($filter === "Memory") {
               $product = $em->getRepository('AppBundle:Memory')->findProduct($key);
           }
           elseif ($filter === "Cpu") {
               $product = $em->getRepository('AppBundle:Cpu')->findProduct($key);
           }
           elseif ($filter === "Motherboard") {
               $product = $em->getRepository('AppBundle:MotherBoard')->findProduct($key);
           }
           elseif ($filter === "All") {
               $product = $em->getRepository('AppBundle:Product')->findProduct($key);
           }



            
             
            
            
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

    public function memoryAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $memory = $em->getRepository('AppBundle:Memory')->findAll();
        return $this->render('default/memory.html.twig', array(
            'memory' => $memory,
        ));
    }

    public function MotherBoardAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $motherboard = $em->getRepository('AppBundle:MotherBoard')->findAll();
        return $this->render('default/motherboard.html.twig', array(
            'motherboard' => $motherboard,
        ));
    }

    public function cpuAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $cpu = $em->getRepository('AppBundle:Cpu')->findAll();
        return $this->render('default/cpu.html.twig', array(
            'cpu' => $cpu,
        ));
    }
}
