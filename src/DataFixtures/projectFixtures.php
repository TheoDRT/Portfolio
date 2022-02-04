<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Project;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $project1 = new Project();
        $project1->setTitle("Baker Street Fighter");
        $project1->setImg("img/portfolio/game");
        

        $manager->persist($project1);

        $project2 = new Project();
        $project2->setTitle("Inciteasy");
        $project2->setImg("img/portfolio/ict");
        

        $manager->persist($project2);

        $project3 = new Project();
        $project3->setTitle("WildPost");
        $project3->setImg("img/portfolio/wp");
        

        $manager->persist($project3);

        $manager->flush();
    }
}
