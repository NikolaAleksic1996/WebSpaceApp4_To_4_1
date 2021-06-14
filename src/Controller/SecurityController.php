<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\Model\UserRegistrationFormModel;
use App\Form\UserRegistrationFormType;
use App\Security\LoginAuthenticator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login")
     */
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout()
    {
        throw new \Exception('logout');
    }

    /**
     * @Route("/register", name="app_register")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginAuthenticator $formAuthenticator)
    {
        // TODO - use Symfony forms & validation
        $form = $this->createForm(UserRegistrationFormType::class);
        $form->handleRequest($request);
        //if ($request->isMethod('POST')) {
        if ($form->isSubmitted() && $form->isValid()) {
            /**
             * @var UserRegistrationFormModel $userModel
             */
            $userModel = $form->getData();

            $user = new User();
            $user->setEmail($userModel->email);

            //  $user->setEmail($request->request->get('email'));
            //   $user->setFirstName('Mystery');
            $user->setPassword($passwordEncoder->encodePassword(
                $user,
                $userModel->plainPassword
                //$form['plainPassword']->getData()
            //$user->getPassword()
            //$request->request->get('password')
            ));


            if (true === $userModel->agreeTerms) {
                $user->agreedTerms();
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            //return $this->redirectToRoute('app_account');//Problem! but we are not login
            // as on anonymous user  /checkout -> /login -> /register -> /checkout
            return $guardHandler->authenticateUserAndHandleSuccess(
                $user,
                $request,
                $formAuthenticator,
                'main'
            );

        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}
