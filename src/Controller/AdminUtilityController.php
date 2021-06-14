<?php


namespace App\Controller;



use App\Repository\UserRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminUtilityController extends AbstractController
{
    /**
     * @Route("/admin/utility/users", methods="GET", name="admin_utility_users")
     * @IsGranted("ROLE_ADMIN_ARTICLE")
     */
    public function getUserApi(UserRepository $userRepository)
    {
        $users = $userRepository->findAllEmailAlphabetical();

        return $this->json([
            'users' => $users
        ], 200, [], ['groups' => ['main']]);
    }

}