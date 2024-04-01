<?php

namespace Database\Seeders;

use App\Models\Ingredients;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ingredients')->insert([
            'breads' =>
            "Italiano Branco",
            "3 Queijos",
            "Parmesão e Orégano",
            "Integral",
            'meats' =>
            "Maminha",
            "Alcatra",
            "Picanha",
            "Veggie burger",
            'sauces' =>
            "Picante",
            "Chipotle",
            "Barbecue",
            "Mostarda e Mel",
            'optionals' =>
            "Bacon",
            "Cheddar",
            "Salame",
            "Cebola roxa",
            "Tomate",
            "Pepino",
        ]);
    }
}
