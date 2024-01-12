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
            $user->setTelephone($faker->e164PhoneNumber());
            $user->setAdresse($faker->address());
            $user->setEmail($faker->email());
            $user->setPassword($faker->password());
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
