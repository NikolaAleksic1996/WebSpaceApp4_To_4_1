<?php

namespace App\Controller;

use Gedmo\Loggable\Entity\Repository\LogEntryRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @IsGranted("ROLE_USER")
 */
//we don`t inherit apstractController but baseController

/**
 * Class AccountController
 * @package App\Controller
 */
class AccountController extends BaseController
{
    /**
     * @Route("/account", name="app_account")
     *
     * @param LoggerInterface $logger
     * @return Response
     */
    public function index(LoggerInterface $logger): Response
    {
        //to get user in controller
        $logger->debug('Checking account page for '.$this->getUser()->getEmail());//ne izlazi mi autocomplite za getEmail jer getUser ne zna za usera zato kreiramo baseController

        return $this->render('account/index.html.twig', [

        ]);
    }

    /**
     * @Route("/api/account", name="api_account")
     */
    public function accountApi()
    {
        $user = $this->getUser();
        //takes json all the attribute that is in this group main
        return $this->json($user, 200, [], [
            'groups' => ['main'],
        ]);
    }
}
