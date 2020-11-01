<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Size;

class SizesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $sizes = ['S', 'M', 'L', 'XL', 'XXL', 'XXXL', '6x3', '6x4', '6x5', '6x6', '38"x75"', '38"x80"', '53"x75"', '60"x80"', '76"x80"', '72"x84"'];
        for ($i=0; $i<count($sizes); $i++ ) {
            Size::create([
                'name' => $sizes[$i],
            ]);
        }
    }
}
