<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $settings = [
            'title' => 'MIT Konsultan',
            'tagline' => 'Musi IT Konsultan',
            'email' => 'info@mitkonsultan.com',
            'phone' => '081958069022',
            'address' => 'Jl. Sakti Wiratama RT 26 RW 01, Palembang',
            'so_facebook' => 'https://www.facebook.com/konsultanonlinemarketingpalembang/',
            'so_instagram' => 'https://www.instagram.com/mit_konsultan'
        ];

        DB::table('settings')->insert($settings);
    }
}
