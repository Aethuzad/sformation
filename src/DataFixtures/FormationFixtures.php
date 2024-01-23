<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class FormationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');

        for ($j=0 ; $j<=5 ; $j++):
            $category = new Category();
            $category->setTitre($faker->randomElement(['Informatique', 'Bureautique', 'Sécurité', 'Web', 'Design', 'Photographie', 'Videographie', 'Audiovisuel', 'Langues']))
            ->setDescription($faker->sentence());
            $manager->persist($category);
        endfor;

        for($i=0; $i<=30; $i++):
            $formation = new Formation();
            $formation->setTitre($faker->words(3,true))
            ->setResume($faker->sentence())
            ->setDescription($faker->paragraph())
            ->setDuree($faker->numberBetween(0, 365))
            ->setNiveau($faker->randomElement(['débutant', 'intermediare', 'expert']))
            ->setLieu($faker->randomElement(['presentiel', 'distanciel']))
            ->setCategory($faker->numberBetween(1, 6));
            $manager->persist($formation);
        endfor;

        $manager->flush();
    }
}
