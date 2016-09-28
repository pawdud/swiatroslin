<?php

namespace ClientBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Logowanie klienta
 */
class LoginController extends Controller
{

    /**
     * @Route("/login", name="client_login")
     */
    public function indexAction(Request $request)
    {

        $authenticationUtils = $this->get('security.authentication_utils');

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();



        return $this->render(
                        'ClientBundle:login:index.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,                 
                        )
        );
    }

}
