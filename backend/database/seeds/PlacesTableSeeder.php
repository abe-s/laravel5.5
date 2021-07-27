<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("places")->truncate();
        $places = [
            [
                "place" => "アメリカ"
            ],
            [
                "place" => "ロシア"
            ],
            [
                "place" => "日本"
            ],
            [
                "place" => "イタリア"
            ],
        ];

        foreach($places as $place){
            \App\Place::created($place);
        }

    }
}
