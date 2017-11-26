<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $this->generateAbout($faker);
        $this->generateSubAbout($faker);
    }

    public function generateAbout($faker)
    {
        DB::table('abouts')->insert([
            'description' => $faker->paragraph,
            'photo' => 'image26.jpg',
            'banner_img' => 'image2.jpg',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }

    public function generateSubAbout($faker)
    {
        foreach (range(1,5) as $index) {
            DB::table('sub_abouts')->insert([
                'about_id' => 1,
                'title' => $faker->catchPhrase,
                'description' => $faker->paragraph,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
