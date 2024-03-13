<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //Empty the table first
        Artist::truncate();
        
        //Define data
       $artists = [
            ['firstname'=>'Daniel','lastname'=>'Marcelin'],
            ['firstname'=>'Philippe','lastname'=>'Laurent'],
            ['firstname'=>'Marius','lastname'=>'Von Mayenburg'],
            ['firstname'=>'Olivier','lastname'=>'Boudon'],
            ['firstname'=>'Anne Marie','lastname'=>'Loop'],
            ['firstname'=>'Pietro','lastname'=>'Varasso'],
            ['firstname'=>'Laurent','lastname'=>'Caron'],
            ['firstname'=>'Élena','lastname'=>'Perez'],
            ['firstname'=>'Guillaume','lastname'=>'Alexandre'],
            ['firstname'=>'Claude','lastname'=>'Semal'],
            ['firstname'=>'Laurence','lastname'=>'Warin'],
        ];
        
        //Insert data in the table
        DB::table('artists')->insert($artists);
    }


}
