<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class AddressController extends Controller
{
    /**
     * @Route("/user/address/{slug}")
     */
    public function addressAction($slug)
    {
        $address = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:Address')->findBy(['id' => $slug]);
        return $this->render('default/Useraddress.html.twig', array('address' => $address
        ));
    }

}
