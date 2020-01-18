<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{


	
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $products = [

		[
			'products_name' => 'Casual shirt',
			'products_price' => '1224',
			'products_sku' => '0df05',
			'products_image' => 'pro_image_1.png',
			'products_description' => 'the shit is ed color'
			
		],
		[
			'products_name' => 'half pan',
			'products_price' => '124',
			'products_sku' => '0df005',
			'products_image' => 'pro_image_2.png',
			'products_description' => 'the pan is jeans and it has flip flops',
			
		],
		

	  ];
	  foreach ($products as $key => $value) {
	  	DB::table('products')->insert([$key => $value]);
	  	# code...
	  }
    }
}
