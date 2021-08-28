<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use App\Entity\Produits;
use App\Repository\CategoriesRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // use the factory to create a Faker\Generator instance
        $faker = Factory::create();
        $categorie = $manager->getRepository(Categories::class);

        for ($i=0; $i < 100; $i++){
            // initialising new produit
            $product = new Produits();

            $product->setDescriptionCourteProduit($faker->sentences(1, true))
                ->setDescriptionLongueProduit($faker->sentences(3, true))
                ->setPrixAchatProduit($faker->randomFloat(2, 5, 55))
                ->setPrixVenteProduit($faker->randomFloat(2, 7, 77))
                ->setStockDisponibleProduit($faker->numberBetween(5, 199))
                ->setStockAlertProduit($faker->numberBetween(10, 30))
                ->setPoidsGProduit($faker->numberBetween(150, 2000))
                ->setCategories($categorie->find($faker->numberBetween(38, 39))[0]); // TODO relation fixtures

            // adding new produit to db
            $manager->persist($product);
            $manager->flush();
        }

    }

    public function getDependencies() :array
    {
        return [
            CategoriesFixtures::class,
        ];
    }
}
