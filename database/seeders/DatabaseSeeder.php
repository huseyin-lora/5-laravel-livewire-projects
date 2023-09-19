<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Country;
use App\Models\Continent;
use Database\Factories\ContinentFactory;
use Database\Factories\ProductFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {

        $continents = [
            ['id' => 1, 'name' => 'Europe',],
            ['id' => 2, 'name' => 'Asia'],
            ['id' => 3, 'name' => 'Africa',],
            ['id' => 4, 'name' => 'South America',],
            ['id' => 5, 'name' => 'North America',],
        ];

        foreach ($continents as $continent) {
            \App\Models\Continent::create($continent)
            ->each(function ($c) {
                $c->countries()->saveMany(
                    Country::factory()->count(5)->make()
                );
            });
        }



        ProductFactory::new()->count(100)->create();
        
    }
}
