<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $array = ['Bed Room', 'Living Room', 'DSLR Camera', 'Appliances', 'Storage', 'Packages'];
        for ($i=0; $i<count($array); $i++ ) {
            Category::create([
                'name' => $array[$i],
            ]);
        }
    }
}
