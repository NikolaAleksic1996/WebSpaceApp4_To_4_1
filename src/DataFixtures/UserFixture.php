<?php

namespace App\DataFixtures;


use App\Entity\ApiToken;
use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Faker\Provider\Base;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixture extends BaseFixture
{

    private UserPasswordEncoderInterface $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {

        $this->passwordEncoder = $passwordEncoder;
    }

    public function loadData(ObjectManager $manager)
    {

        $this->createMany(10, 'main_users', function ($i) use($manager){
           $user = new User();
           $user->setEmail(sprintf('spacebar%ddedamraz123@gmail.com', $i));
           $user->setFirstName($this->faker->firstName);
           if($this->faker->boolean)
           {
               $user->setTwitterUsername($this->faker->userName);
           }

           $user->setPassword($this->passwordEncoder->encodePassword(
               $user,
               'engage'
           ));

           //create Api token
            $apiToken1 = new ApiToken($user);
            $apiToken2 = new ApiToken($user);
            $manager->persist($apiToken1);
            $manager->persist($apiToken2);

           return $user;
        });

        $this->createMany(3, 'admin_users', function ($i){
            $user = new User();
            $user->setEmail(sprintf('admin%ddedamraz123@gmail.com', $i));
            $user->setFirstName($this->faker->firstName);
            $user->setRoles(['ROLE_ADMIN']);

            $user->setPassword($this->passwordEncoder->encodePassword(
                $user,
                'engage'
            ));

            return $user;
        });

        $manager->flush();
    }
}
