<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
         	UsersTableSeeder::class,
         	CapitalsTableSeeder::class,
         	DownlinesTableSeeder::class,
         	NewsTableSeeder::class,
         	ProfitstableSeeder::class,
         	RequestsTableSeeder::class,
         	TestimoniesTableSeeder::class,
         	TransactionsTableSeeder::class

         ]);
    }
}
