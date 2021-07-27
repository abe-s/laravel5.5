<?php

use Illuminate\Database\Seeder;

class CatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
      DB::table('cats')->truncate();
      
      $cats = [
          [
            "type" => "ロシアンブルー"
          ],
          [
            "type" => "アメリカンショートヘア"
          ],
          [
            "type" => "マンチカン"
          ],
          [
            "type" => "三毛猫"
          ],
          [
            "type" => "雑種"
          ],
      ];

      foreach($cats as $cat) {
        \App\Cat::create($cat);
      }
    }
}
