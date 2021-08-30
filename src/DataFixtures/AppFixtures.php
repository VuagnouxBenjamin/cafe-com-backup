<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Produits;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // initialising faker.
        $faker = Factory::create();

        // name of the categories.
        $categorie_names = [
            'Océanie',
            'Inde',
            'Afrique',
            'Amérique centrale',
            'Amérique du sud',
            'Asie'
        ];

        // create new categorie
        foreach ($categorie_names as $name) {
            $categories = new Categories();
            $categories->setNomCategorie($name)
                ->setCategorieImage('images/categories/categories_img.png')
                ->setDescCategorie($faker->sentences(2, true));

//            Store the categorie in the $manager
            $manager->persist($categories);

//            Creating 20 to 60 products per categorie
            for ($i = 0; $i < rand(20, 60); $i++) {

                $product = new Produits();

                $product->setDescriptionCourteProduit($faker->sentences(1, true))
                    ->setDescriptionLongueProduit($faker->sentences(3, true))
                    ->setPrixAchatProduit($faker->randomFloat(2, 5, 55))
                    ->setPrixVenteProduit($faker->randomFloat(2, 7, 77))
                    ->setStockDisponibleProduit($faker->numberBetween(5, 199))
                    ->setStockAlertProduit($faker->numberBetween(10, 30))
                    ->setPoidsGProduit($faker->numberBetween(150, 2000));

                $manager->persist($product);

                $categories->addProduit($product);
            }

            $manager->flush();
        }
    }
}
