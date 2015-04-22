<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class AdsController extends Controller
{
    /**
     * @Route("/ads")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

}
