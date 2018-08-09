<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\SearchType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $search = NULL;

        $formBuilder = $this->createFormBuilder();

        $formBuilder

            ->add('Rechercher', SearchType::class)

            ->add('Recherche',      SubmitType::class)
        ;
        $form = $formBuilder->getForm();

        $form->handleRequest($request);

        $repo = $this->getDoctrine()
            ->getManager()
            ->getRepository('AppBundle:Product');
        $venteflash = $repo->findBy(
            array('discountStatus' => 'vente_flash'));
        $promo = $repo->findBy(
            array('discountStatus' => 'promo'));
        $topvente = $repo->findBy(
            array('discountStatus' => 'top_vente'));

        if ($form->isSubmitted() && $form->isValid())
        {
            $res = $form->getData();
            $key = $res['Rechercher'];
            $key= preg_replace('/\s/', '', $key);
            $em = $this->getDoctrine()->getEntityManager();
            $product = $em->getRepository('AppBundle:Product')->findProduct($key);

            return $this->render('default/results.html.twig', array(
                'form' => $form->createView(),
                'product' => $product,
            ));
        }

        else
        {
            return $this->render('default/index.html.twig',array(
                'form' => $form->createView(),
                'venteflash' => $venteflash,
                'promo' => $promo,
                'topvente' => $topvente,
            ));
        }
    }
}
