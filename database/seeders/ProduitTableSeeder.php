<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produit;
use Faker\Factory as Faker;
class ProduitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Generate 100 dummy products
        for ($i = 0; $i < 100; $i++) {
            Produit::create([
                'nom_produit' => $faker->word,
                'tva' => $faker->randomFloat(2, 0, 1),
                'prix_achat_HT' => $faker->randomFloat(2, 0, 100),
                'prix_achat_TTC' => $faker->randomFloat(2, 0, 100),
                'prix_vente_HT' => $faker->randomFloat(2, 0, 200),
                'prix_vente_TTC' => $faker->randomFloat(2, 0, 200),
                'designation' => $faker->text,
                'category_id' => $faker->numberBetween(1, 20),
            ]);
        }
    
    }
}
