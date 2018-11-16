<?php

use Illuminate\Database\Seeder;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker
		
		$Limit = 10;
		
		for ($i = 0; $i < $Limit; $i++){
			DB::table('mahasiswa')->insert([
				'nama'=> $faker->name,
				'harga'=> $faker->harga,
				'stok' => $faker->stok,
				'expired_date' => $faker->expiredDate,
				'production_date' => $faker->productionDate,
			]);
		}
    }
}
