<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'Blue Bracelet',
                'price' => '45',
                'description' => ' Materials: Turquoises, Emerald, G/Vs Diamonds and 18K Yellow Gold',
                'category' => 'Bracelet',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0250/0611/2828/products/D100643_1200xs_600x.jpg?v=1597155054'
            ],
            [
                'name' => 'Brown Bracelet',
                'price' => '30',
                'description' => ' Every component as well as the string color can be changed and customized in Creator. Materials: Turquoises, Emerald, G/Vs Diamonds and 18K Yellow Gold',
                'category' => 'Bracelet',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0250/0611/2828/products/10107_600x.jpg?v=1600437231'
            ],
            [
                'name' => 'Black Bracelet',
                'price' => '47',
                'description' => ' Materials: Turquoises, Emerald, G/Vs Diamonds and 18K Yellow Gold',
                'category' => 'Bracelet',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0250/0611/2828/products/D143090_600x.jpg?v=1585919819'
            ],
            [
                'name' => 'Green Bracelet',
                'price' => '65',
                'description' => 'nEvery component as well as the string color can be changed and customized in Creator. Materials: Turquoises, Emerald, G/Vs Diamonds and 18K Yellow Gold',
                'category' => 'Bracelet',
                'gallery' => 'https://cdn.shopify.com/s/files/1/0250/0611/2828/products/100924_600x.jpg?v=1600437763'
            ],
             

        ]);
    }
}
