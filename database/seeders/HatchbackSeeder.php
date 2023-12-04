<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Vehicle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HatchbackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = Category::where('name', 'Hatchback')->first();

        if ($category) {
            $category->description = 'Los hatchbacks son un tipo de auto compacto que se distingue por tener solo dos volúmenes (cabina y cofre del motor), así como una quinta puerta trasera que da acceso al área de carga.';
            $category->save();
        }


        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'AB1234',
            'year' => 2020,
            'brand' => 'Volkswagen',
            'model' => 'Golf'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'CD5678',
            'year' => 2019,
            'brand' => 'Ford',
            'model' => 'Fiesta'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'EF9012',
            'year' => 2021,
            'brand' => 'Honda',
            'model' => 'Fit'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'GH3456',
            'year' => 2018,
            'brand' => 'Toyota',
            'model' => 'Yaris'
        ]);

        Vehicle::create([
            'category_id' => $category->id,
            'patent' => 'IJ7890',
            'year' => 2022,
            'brand' => 'Hyundai',
            'model' => 'i30'
        ]);
    }
}
