<?php

use Illuminate\Database\Seeder;

class NekosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('nekos')->truncate();
        
        $nekos = [
            [
                "name" => "まめきち",
                "type_code" => 3,
                "gender" => "オス",
                "age" => 1,
                "place_code" => 2,
                "shop_code" => 2
            ],
            [
                "name" => "もちまる",
                "type_code" => 1,
                "gender" => "オス",
                "age" => 2,
                "place_code" => 1,
                "shop_code" => 4
            ],
            [
                "name" => "トラ",
                "type_code" => 1,
                "gender" => "メス",
                "age" => 3,
                "place_code" => 1,
                "shop_code" => 1
            ],
            [
                "name" => "ココ",
                "type_code" => 4,
                "gender" => "オス",
                "age" => 4,
                "place_code" => 4,
                "shop_code" => 1
            ],
        ];

        foreach($nekos as $neko){
            \App\Neko::create($neko);
        }

    }
}
