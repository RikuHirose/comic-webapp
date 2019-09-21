<?php

use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            [
                'img_url'              => 'https://images-na.ssl-images-amazon.com/images/I/515XH2XSM4L.jpg',
                'comic_name'           => '花より男子',
                'writer_name'          => '神尾葉子',
                'publisher'            => '集英社',
                'publication_magazine' => 'マーガレット',
                'publish_number'       => '全37巻',
                'publish_status'       => '完結済',
                'duration'             => '1992 〜 2008',
                'amazon_url'           => '',
            ],
            [
                'img_url'              => 'https://images-na.ssl-images-amazon.com/images/I/51l%2BdZsVseL.jpg',
                'comic_name'           => 'マギ',
                'writer_name'          => '大高忍',
                'publisher'            => '小学館',
                'publication_magazine' => '週刊少年サンデー',
                'publish_number'       => '全37巻,',
                'publish_status'       => '完結済',
                'duration'             => '2009 〜 2017',
                'amazon_url'           => '',
            ],
            [
                'img_url'              => 'https://images-na.ssl-images-amazon.com/images/I/51XH5CNKT0L.jpg',
                'comic_name'           => '鋼の錬金術師',
                'writer_name'          => '荒川弘',
                'publisher'            => 'スクウェア・エニックス',
                'publication_magazine' => '月刊少年ガンガン',
                'publish_number'       => '全27巻',
                'publish_status'       => '完結済',
                'duration'             => '2002 〜 2010',
                'amazon_url'           => '',
            ],
          ]);
    }
}
