<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\Table;

class testSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test')->insert([
            [

                'isim' => 'deneme1',
                'soyisim'=>'deneme1',
                'adres'=>'deneme1',
                'telefon'=>'123456789'

            ],
            [

                'isim' => 'deneme2',
                'soyisim'=>'deneme2',
                'adres'=>'deneme2',
                'telefon'=>'123456789'

            ],
            [

                'isim' => 'deneme3',
                'soyisim'=>'deneme3',
                'adres'=>'deneme3',
                'telefon'=>'123456789'

            ],
            [

                'isim' => 'deneme3',
                'soyisim'=>'deneme3',
                'adres'=>'deneme3',
                'telefon'=>'123456789'

            ],
            [

                'isim' => 'deneme4',
                'soyisim'=>'deneme4',
                'adres'=>'deneme4',
                'telefon'=>'123456789'

            ],



        ]);
    }
}
