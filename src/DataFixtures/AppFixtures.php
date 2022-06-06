<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setEmail('pierre.bonnafous@gmail.com');
        $user->setRoles(['ROLE_ADMIN']);
        $user->setPassword('$2y$13$GWmpvZVrb6lD5Bt4BTIdKOB3QWIB9DGKUc4AE8nppHSQdmPznzyS.');

        $manager->persist($user);

        $manager->flush();
    }
}
