<?php

use App\Models\TypeImage;
use Illuminate\Database\Seeder;

class TypeImageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeImage::create([
            'name' => 'Photo',
        ]);
        TypeImage::create([
            'name' => 'Dessin',
        ]);
        TypeImage::create([
            'name' => 'Numerique',
        ]);
        TypeImage::create([
            'name' => 'Animé',
            ]);
    }
}
