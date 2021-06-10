<?php

namespace App\Controller;

use Gedmo\Loggable\Entity\Repository\LogEntryRepository;
use Psr\Log\LoggerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**ovde su
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
        //sada  ovako pribavljamo user object u kontroleru a kako sada u temlatu
        //index.html.twig pa samo sa app.user.firstname npr
        $logger->debug('Checking account page for '.$this->getUser()->getEmail());//ne izlazi mi autocomplite za getEmail jer getUser ne zna za usera zato kreiramo baseController

        return $this->render('account/index.html.twig', [

        ]);
    }
}
