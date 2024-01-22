<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for($i=0; $i<=10; $i++):
            $user = new User();
            $user->setNom($faker->lastName());
            $user->setPrenom($faker->firstName());
            $user->setAge($faker->numberBetween(18, 60));
            $user->setTelephone($faker->randomElement(['0685457578','0673457541','0690457596','0630457520','0667457543','0688557567','0683457539']));
            $user->setAdresse($faker->address());
            $user->setEmail($faker->email());
            $user->setPassword($faker->password());
            $user->setRoles($faker->randomElement([['ROLE_USER'],['ROLE_ADMIN']]));
            // $formation = new Formation();
            // $formation->setTitre($faker->words(3, true));
            // $formation->setResume($faker->sentence());
            // $formation->setDescription($faker->paragraph());
            // $formation->setDuree($faker->numberBetween(0, 365));
            // $formation->setNiveau($faker->randomElement(['débutant', 'intermediare', 'expert']));
            // $formation->setLieu($faker->randomElement(['presentiel', 'distanciel']));
            $manager->persist($user);
        endfor;

        $manager->flush();
    }
}
