<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Property;
use App\Models\SellType;
use App\Models\Testimonial;
use App\Models\PropertyType;
use App\Models\PropertyAgent;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Property::factory(9)->create();

        PropertyAgent::factory(4)->create();

        Testimonial::factory(5)->create();

        SellType::create(['name' => 'Sell']);
        SellType::create(['name' => 'Rent']);

        PropertyType::create(['name' =>'Apartment']);
        PropertyType::create(['name' =>'Villa']);
        PropertyType::create(['name' =>'Home']);
        PropertyType::create(['name' =>'Office']);
        PropertyType::create(['name' =>'Building']);
        PropertyType::create(['name' =>'Townhouse']);
        PropertyType::create(['name' =>'Shop']);
        PropertyType::create(['name' =>'Garage']);

        \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
