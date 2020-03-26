<?php

use Illuminate\Database\Seeder;

class LinksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data=[
        [
            'link_name' => '點餐',
            'link_title' => '全台最大的點餐系統',
            'link_url' => 'wwww.google.com',
            'link_order' => 1
        ],
        [
            'link_name' => '點餐囉',
            'link_title' => '全台最好的點餐系統',
            'link_url' => 'wwww.yahoo.com.tw',
            'link_order' => 2
        ],
    ];
        DB::table('links')->insert($data);
    }
}
