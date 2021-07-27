<?php

use Illuminate\Database\Seeder;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("shops")->truncate();

        $shops = [
            [
                "shop_name" => "ネコカフェ",
                "shop_add" => "東京都",
                "shop_phone" => "090XXXXXXXX",
            ],
            [
                "shop_name" => "キャッツカフェ",
                "shop_add" => "宮城県",
                "shop_phone" => "090DDDDDDDD",
            ],
            [
                "shop_name" => "マヌルネコカフェ",
                "shop_add" => "福岡県",
                "shop_phone" => "080gggggggg",
            ],
            [
                "shop_name" => "ネコ展",
                "shop_add" => "北海道",
                "shop_phone" => "090jjjjffff",
            ],
        ];

        foreach($shops as $shop){
            \App\Shop::create($shop);
        }
    }
}
