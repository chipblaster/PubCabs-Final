<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio maxime, qui debitis, odit praesentium repellendus quis eligendi laborum, corrupti dignissimos quos officiis dolorem earum. Exercitationem nostrum ex soluta velit.',
            'address' => '700 5th Avenue, New York City, United States',
            'phone' => '1800-1111-2222',
            'email' => 'example@example.com',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
