<?php

namespace CoreBundle\Controller;

use CoreBundle\Component\GlobalDataApiService;
use CoreBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController
 */
class SecurityController extends Controller
{
    /**
     * @Route("/", name="aa")
     * @return Response
     */
    public function loginAction()
    {
        return $this->render('@Core/main.twig', [

        ]);
    }
}
