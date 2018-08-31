<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * @Route("/user/profile/{user}", name="user_profile")
     */
    
    public function userAction($user) {
        if ($this->isGranted('IS_AUTHENTICATED_FULLY')){
        $user = $this->getDoctrine()->getEntityManager()->getRepository('AppBundle:User')->findBy(["id" => $user]);
        
        

        return $this->render('default/Userprofile.html.twig', array('user' => $user));}
    }
}