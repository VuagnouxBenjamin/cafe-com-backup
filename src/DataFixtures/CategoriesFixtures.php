<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categorie_names = [
            'Océanie',
            'Inde',
            'Afrique',
            'Amérique centrale',
            'Amérique du sud',
            'Asie'
        ];

        foreach($categorie_names as $name) {
            $categories = new Categories();
            $categories->setNomCategorie($name)
                ->setCategorieImage('images/categories/categories_img.png');

            $manager->persist($categories);
            $manager->flush();
        }

    }
}
